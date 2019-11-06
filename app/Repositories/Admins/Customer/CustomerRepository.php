<?php

namespace App\Repositories\Admin\Customer;

use App\Models\Customer\Customer;
use App\Contract\Admins\Customer\CustomerContract;
use Recca0120\Repository\EloquentRepository;

class CustomerGroupRepository extends EloquentRepository implements CustomerContract
{
    public function __construct(Customer $model)
    {
        $this->model = $model;

    }

    /**
     *
     */

    public function getForDataTable($status = 1, $trashed = false) {

       return Customer::select([])
                             ->where('status', $status)
                             ->get();
    }
}
