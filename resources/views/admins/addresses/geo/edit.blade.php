@extends('admin.layouts.master')

@section('title')
  @Lang('Geo') .'|'. @Lang('Geo Edit')  
@endsection

@section('page-header')
<h1>@Lang('Geo')<small> @Lang('Edit Geo')</small></h1>
       
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="box box-pink">
            <div class="box-header">
               <div class="box-title"> @Lang('Edit Geo')</div>
               @role('')
                {!! Form::open(['route' => 'admin.geo.update', 'class'=>'form-horizontal', 'role' => 'form', 'method'=>'patch' 'file'=>true]) !!}
                {{ csrf_field() }} 
                   <div class="pull-right box-tools">
                   @permission('')
                    {!! Form::button(['type' =>'submit', 'name' => 'save', 'class'=>'btn btn-circle btn-info ripple', 'data-toggle' =>'tooltip', 'title' => '{{trans('Save')}}' ],<i class="ion ion-android-checkmark-circle"></i>) !!}
                    {!! Form::button(['type' =>'submit', 'name' => 'cancel', 'class'=>'btn btn-circle btn-danger ripple', 'data-toggle' =>'tooltip', 
                    'title' => '{{trans('Cancel')}}' 'route' => 'admin.geo.index' ],<i class="ion ion-ios-close-outline"></i>) !!}
                   @endpermission
               </div>  
            </div><!--box-header-->
            <div class="box-body">
                
                
                @include('admin.addresses.geo.form')
                 
                {!! Form::close() !!}
               @endrole 
            </div><!--box-body-->
        </div>
    </div><!--col-->
</div>
@stop

@section('script')

	
@stop




