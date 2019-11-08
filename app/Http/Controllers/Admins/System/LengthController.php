<?php

namespace App\Http\Controllers\Admins\System;

use App\Http\Controllers\Controller;
use App\Models\System\Length;
use App\Http\Requests\System\LengthRequest;
use App\Repositories\Admin\System\LengthRepository;
use Illuminate\Http\Request;

class LengthController extends Controller
{

    /**
     * @var LengthRepo
     */
     protected $lengths;

     public function __construct(LengthRepository  $lengths)
     {
          $this->lengths=$lengths;
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LengthRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\System\Length  $length
     * @return \Illuminate\Http\Response
     */
    public function show(Length $length)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\System\Length  $length
     * @return \Illuminate\Http\Response
     */
    public function edit(Length $length)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\System\Length  $length
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Length $length)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\System\Length  $length
     * @return \Illuminate\Http\Response
     */
    public function destroy(Length $length)
    {
        //
    }
}
