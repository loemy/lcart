@extends('admin.layouts.master')

@section('title')
  @Lang('Location') .'|'. @Lang('Location Add')  
@endsection

@section('page-header')
<h1>@Lang('Location')<small> @Lang('Location Add')</small></h1>
       
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="box box-pink">
            <div class="box-header">
               <div class="box-title"> @Lang('Add Location')</div>
               @role('')
                {!! Form::open(['route' => 'admin.location.store', 'class'=>'form-horizontal', 'role' => 'form', 'method'=>'post' 'file'=>true]) !!}
                {{ csrf_field() }} 
                   <div class="pull-right box-tools">
                   @permission('')

                    {!! Form::button(['type' =>'submit', 'name' => 'save', 'class'=>'btn btn-circle btn-info ripple', 'data-toggle' =>'tooltip', 'title' => '{{trans('Save')}}' ],<i class="ion ion-android-checkmark-circle"></i>) !!}
                    
                    <button type="button" href="{{ route('admin.location.index') }} " data-toggle="tooltip" title="{{trans('Cancel')}}" class="btn btn-circle btn-danger ripple">
                    <i class="ion ion-ios-close-outline"></i>
                    </button>  
                   
                  
                   @endpermission
               </div>  
            </div><!--box-header-->
            <div class="box-body">
                
                
                @include('admin.products.location.form')
                 
                {!! Form::close() !!}
               @endrole 
            </div><!--box-body-->
        </div>
    </div><!--col-->
</div>
@stop

@section('script')

	
@stop




