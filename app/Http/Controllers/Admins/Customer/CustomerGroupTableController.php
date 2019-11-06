<?php

namespace App\Http\Controllers\Admins\Customer;

use App\Repositories\Admin\Customer\CustomerGroupRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CustomerGroupRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class CustomerGroupTableController extends Controller
{

     protected $customergroups;

    /**
     *
     */

    public function __construct(CustomerGroupRepository $customergroups)
    {
       $this->customergroups = $customergroups;
    }

    public function __invoke(CustomerGroupRequest $request)
    {
        return Datatables::make()
                  ->make(true);
    }
}
