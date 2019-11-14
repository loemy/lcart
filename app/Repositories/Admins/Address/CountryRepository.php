<?php

namespace App\Repositories\Admins\Address;

use App\Contract\Admins\Address\CountryContract;
use App\Models\Address\Country;
use Recca0120\Repository\EloquentRepository;

class CountryRepository extends EloquentRepository implements CountryContract
{
      public function __construct(Country $model)
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
        return Country::select(['name', 'iso_code_2', 'iso_code_3', 'status'])
                            ->get();
    }


}
