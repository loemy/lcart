@extends('admin.layouts.master')

@section('title')
 @Lang('Location')
@endsection

@section('page-header')
<h1>@Lang('Location')</h1>
    
@endsection
@section('content')
 <div class="row">
     <div class="col-sm-12">
       <div class="box box-pink">
       <div class="box-header">
          <div class="box-title"> @Lang('Location')</div>
          @role('Admin')
                <div class="pull-right box-tools">
                @permission('all')
                <button href="{!! url('admin.location.create')  !!}" type="button" class="btn btn-circle btn-info" data-toggle="tooltip" title="{{trans('Add')}}" data-placement="left" >
			    <span><i class="fa fa-plus"></i></span>
			    </button>
                <button href="{!! url('admin.location.destroy')  !!}" type="button" class="btn btn-circle btn-pink" ><span><i class="fa fa-trash"></i></span></button>  
                
                @endpermission
               </div>
          @endrole      
       </div><!--box-header-->
       <div class="box-body">
             <table id="Location" class="table table-bordered">
                    <thead>
                       <tr>
				        <th class="text-left"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked',this.checked);" /></th>
                         <th >{{__('Name')}}</th>
                         <th >{{__('Address')}}</th>
                         <th >{{__('Telephone')}}</th>
                         <th >{{__('Fax')}}</th>
                         <th >{{__('Latitude')}}</th>
                         <th >{{__('Longtitute')}}</th>
                         <th ></th>   
                       </tr>
                     </thead>
                     <tbody>
                        
                     </tbody>   
            </table>


       </div><!--box-body-->
       </div><!--box-pink-->

     </div><!--col-->
 </div><!--row-->   
@endsection
@section('script')
<script type="text/javascript">
$(function(){
    $('#Location').DataTable({
    processing: true,
    serviceSide:true,
    language: {
    paginate: {
      next: '<i class="fa fa-chevron-right">',
      previous: '<i class="fa fa-chevron-left">'  
    }
  },
    ajax:'{!! route('admin.location.data') !!}',
    columns:[
	   {data: 'checkbox',     name: 'checkbox' },
	   {data: 'name',     name: 'name' },
	   {data: 'address', name:'addresses.address1'},
     {data: 'telephone', name:'addresses.telephone'},
     {data: 'fax', name:'addresses.fax'},
     {data: 'latitude', name:'addresses.latitute'},
     {data: 'longtitute', name:'addresses.longtitute'},
	   {data: 'action',   name:'action', orderable:false, searchable:false},
    ]
   
    });
});
</script>    
@endsection