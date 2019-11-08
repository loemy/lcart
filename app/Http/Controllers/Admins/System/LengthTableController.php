<?php

namespace App\Http\Controllers\Admins\System;

use App\Http\Controllers\Controller;
use App\Http\Requests\System\LengthRequest;
use App\Repositories\Admin\System\LengthRepository;
use Yajra\DataTables\Facades\DataTables;

class LengthTableController extends Controller
{
    protected $lengths;

    public function __construct(LengthRepository $lengths)
    {
           $this->lengths =$lengths;

    }

    public function __invoke(LengthRequest $request)
    {
           return DataTables::of($this->lengths->getForDataTable($request->get('trashed')))
                           ->escapeColumn(['title'])
                           ->addColumn('action', function($length){
                               return $length->action_buttons;
                           })
                           ->sffColumn('default', function ($length) {
                               return $length->default_label;
                           })
                           ->make(true);
    }

}
