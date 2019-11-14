<?php

namespace App\Repositories\Admins\System;

use App\Models\System\Weight;
use App\Contract\Admins\System\WeightContract;
use App\Exceptions\GeneralException;
use Recca0120\Repository\EloquentRepository;
use Illuminate\Support\Facades\DB;

class WeightRepository extends EloquentRepository implements WeightContract
{
    public function __construct(Weight $model)
    {
        $this->model = $model;

    }

    /**
     *
     */

    public function getForDataTable($status = 1, $trashed = false) {

        if($trashed == 'true') {
            return $this->model->onlyTrashed();
        }
        return Weight::select(['title', 'unit', 'value', 'is_default'])
                            ->get();
    }

    /**
     *
     */

    public function create(array $data) :Weight
    {
       return DB::transaction(function () use ($data) {
            $weight = $this->model->create($data);

            if($weight){
                event(new WeightCreate($weight));
                return $weight;
            }

            throw new GeneralException(__('weight::exceptions.admin.weights.create_error'));
       });
    }

    /**
     * change from exist default to new drfault- -todo
     * new data will be 1, old either to convert
     */

    public function update(Weight $weight, array $data) :Weight
    {
        return DB::transaction(function () use($weight, $data) {
          if($weight->update($data)){
              $weight->save();
              event(new WeightUpdated($weight));
              return $weight;
          }
          throw new GeneralException(__('weight::exceptions.admin.weight.update_error'));
        });
    }

    /** */

    public function delete(Weight $weight) :Weight
    {
       if($weight->delete()){
           event(new WeightDelete($weight));

           return $weight;
       }
       throw new GeneralException(__('weight::exceptions.admin.weights.delete_error'));
    }

    /** */

    public function forceDelete(Weight $weight) :Weight
    {
         if(is_null($weight->deleted_at))
         {
             throw new GeneralException(__('weight::exceptions.admin.weight.delete_first'));
         }

         if($weight->forceDelete())
         {
             event(new WeightPermanentlyDeleted($weight));
             return $weight;
         }

         throw new GeneralException(__('weight::exceptions.admin.weight.delete_error'));
    }

    /** */

    public function restore(Weight $weight): Weight
    {
        if(is_null($weight->deleted_at))
        {
            throw new GeneralException(__('weight::exceptions.admin.weights.cant_restore'));
        }

        if($weight->restore())
        {
            event(new WeightRestored($weight));
            return $weight;
        }
        throw new GeneralException(__('weight::exceptions.admin.weights.restore_error'));
    }

    /** */

    public function setDefault(Weight $weight) :Weight
    {
       if($weight->default ==1)
       {
           throw new GeneralException(__('weight::exceptions.admin.weights.already_default'));
       }
       if($default_weight = $this->getByColumn(1, 'is_default')){
           $default_weight -> default = 0;
           $default_weight->save();
       }

       $weight->default = 1;
       if($weight->save()){
           event(new WeightSetDefault($weight));
           return $weight;
       }

       throw new GeneralException(__('weight::exceptions.admin.weight.default_error'));
    }
}
