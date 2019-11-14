@extends('admin.layouts.master')

@section('title')
 @Lang('State')
@endsection

@section('page-header')
<h1>@Lang('State')</h1>
    
@endsection
@section('content')
 <div class="row">
     <div class="col-sm-12">
       <div class="box box-pink">
       <div class="box-header">
          <div class="box-title"> @Lang('State')</div>
          @role('Admin')
                <div class="pull-right box-tools">
                @permission('all')
                <button href="{!! url('admin.state.create')  !!}" type="button" class="btn btn-circle btn-info" data-toggle="tooltip" title="{{trans('Add')}}" data-placement="left" >
			        	<span><i class="fa fa-plus"></i></span>
			        	</button>
                <button href="{!! url('admin.state.destroy')  !!}" type="button" class="btn btn-circle btn-pink" ><span><i class="fa fa-trash"></i></span></button>  
                
                @endpermission
               </div>
          @endrole      
       </div><!--box-header-->
       <div class="box-body">
             <table id="State " class="table table-bordered">
                    <thead>
                       <tr>
				        <th class="text-left"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked',this.checked);" /></th>
                         <th >{{__('State name')}}</th>
                         <th >{{__('Name')}}</th>
                         <th >{{__('Code')}}</th>
                         <th >{{__('Status')}}</th>
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
    $('#State ').DataTable({
    processing: true,
    serviceSide:true,
    language: {
    paginate: {
      next: '<i class="fa fa-chevron-right">',
      previous: '<i class="fa fa-chevron-left">'  
    }
  },
    ajax:'{!! route('admin.state.data') !!}',
    columns:[
	   {data: 'checkbox',     name: 'checkbox' },
	   {data: 'name',         name: 'name' },
	   {data: 'code',         name:'code'},
	   {data: 'status',       name:'status'},
	   {data: 'action',       name:'action', orderable:false, searchable:false},
    ]
   
    });
});
</script>    
@endsection