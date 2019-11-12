<?php

namespace App\Repositories\Admins\Customer;

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

        if($trashed = "true"){
            return CustomerGroup::onlyTrashed()
                                ->select(['name', 'group_type','position','status'])
                                ->get();
        }

        return CustomerGroup::select(['name', 'group_type','position','status'])
                             ->where('status', $status)
                             ->get();
    }
}
