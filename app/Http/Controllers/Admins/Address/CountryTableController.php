<?php

namespace App\Http\Controllers\Admins\Address;

use App\Http\Controllers\Controller;
use App\Http\Requests\Address\CountryRequest;
use App\Repositories\Admins\Address\CountryRepository;
use Yajra\DataTables\Facades\DataTables;



class CountryTableController extends Controller
{
   
    protected $countries;
    /**
     * Undocumented function
     *
     * @param CountryRepository $countries
     */
    public function __construct(CountryRepository $countries)
   {
       $this -> countries =$countries;
   }


   /**
    * Undocumented function
    *
    * @param CountryRequest $request
    * @return mixed
    */
   public function __invoke(CountryRequest $request)
   {
       return DataTables::of($this->countries->getForDataTable($request->get('status'), $request->get('trashed')))
                        ->escapeColumn(['name'])
                        ->addColumn('action', function($countries){
                            return $countries->action_buttons;
                        })
                       
                        ->make(true);

   }
}
