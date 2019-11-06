<?php

namespace App\Repositories\Admin\Customer;

use App\Models\Customer\CustomerGroup;
use App\Contract\Admins\Customer\CustomerGroupContract;
use Recca0120\Repository\EloquentRepository;

class CustomerGroupRepository extends EloquentRepository implements CustomerGroupContract
{
    public function __construct(CustomerGroup $model)
    {
        $this->model = $model;

    }

    /**
     *
     */

    public function getForDataTable($status = 1, $trashed = false) {

       return CustomerGroup::select([])
                             ->where('status', $status)
                             ->get();
    }
}
