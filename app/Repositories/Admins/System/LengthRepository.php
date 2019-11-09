<?php

namespace App\Repositories\Admin\System;

use App\Models\System\Length;
use App\Contract\Admins\System\LengthContract;
use App\Exceptions\GeneralException;
use Recca0120\Repository\EloquentRepository;
use Illuminate\Support\Facades\DB;

class LengthRepository extends EloquentRepository implements LengthContract
{
    public function __construct(Length $model)
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
        return Length::select(['title', 'unit', 'value', 'is_default'])
                            ->get();
    }

    /**
     *
     */

    public function create(array $data) :Length
    {
       return DB::transaction(function () use ($data) {
            $length = $this->model->create($data);

            if($length){
                event(new LengthCreate($length));
                return $length;
            }

            throw new GeneralException(__('length::exceptions.admin.lengths.create_error'));
       });
    }

    /**
     * change from exist default to new drfault- -todo
     * new data will be 1, old either to convert
     */

    public function update(Length $length, array $data) :Length
    {
        return DB::transaction(function () use($length, $data) {
          if($length->update($data)){
              $length->save();
              event(new LengthUpdated($length));
              return $length;
          }
          throw new GeneralException(__('length::exceptions.admin.length.update_error'));
        });
    }

    public function delete(Length $length) :Length
    {
       if($length->deleted()){
           event(new LengthDelete($length));

           return $length;
       }
       throw new GeneralException(__('length::exceptions.admin.lengths.delete_error'));
    }

    public function forceDelete(Length $length) :Length
    {
         if(is_null($length->deleted_at))
         {
             throw new GeneralException(__('length::exceptions.admin.length.delete_first'));
         }

         if($length->forceDelete())
         {
             event(new LengthPermanentlyDeleted($length));
             return $length;
         }

         throw new GeneralException(__('length::exceptions.admin.length.delete_error'));
    }

    public function restore(Length $length): Length
    {
        if(is_null($length->deleted_at))
        {
            throw new GeneralException(__('length::exceptions.admin.lengths.cant_restore'));
        }

        if($length->restore())
        {
            event(new LengthRestored($length));
            return $length;
        }
        throw new GeneralException(__('length::exceptions.admin.lengths.restore_error'));
    }

    public function setDefault(Length $length) :Length
    {
       if($length->default ==1)
       {
           throw new GeneralException(__('length::exceptions.admin.lengths.already_default'));
       }
       if($default_length = $this->getByColumn(1, 'is_default')){
           $default_length -> default = 0;
           $default_length->save();
       }

       $length->default = 1;
       if($length->save()){
           event(new LengthSetDefault($length));
           return $length;
       }

       throw new GeneralException(__('length::exceptions.admin.length.default_error'));
    }
}
