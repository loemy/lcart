<?php

namespace App\Repositories\Admin\System;

use App\Models\System\Length;
use App\Contract\Admins\System\LengthContract;
use Recca0120\Repository\EloquentRepository;

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

       return Customer::select(['title', 'unit', 'value', 'is_default'])
                            
                             ->get();
    }
}
