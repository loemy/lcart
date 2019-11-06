@extends('admin.layouts.master')

@section('title')
 @lang('Customer Group Management')
@endsection

@section('page-header')
<h1>@lang('Customer Group Management')</h1>

@endsection
@section('content')
 <div class="row">
     <div class="col-sm-12">
       <div class="box box-pink">
       <div class="box-header">
          <div class="box-title"> @lang('Customer Group')</div>
          @role('Admin')
                <div class="pull-right box-tools">
                @permission('all')
                <button href="{!! url('admin.customergroup.create')  !!}" type="button" class="btn btn-circle btn-info" data-toggle="tooltip" title="Add" data-placement="left" >
				        <span><i class="fa fa-plus"></i></span>
				        </button>
                <button href="{!! url('admin.customergroup.destroy')  !!}" type="button" class="btn btn-circle btn-pink" ><span><i class="fa fa-trash"></i></span></button>
                @endCustomer Group
               </div>
          @endpermission
       </div><!--box-header-->
       <div class="box-body">
             <table id="Customergroup" class="table table-bordered">
                    <thead>
                       <tr>
				        <th class="text-left"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked',this.checked);" /></th>
                         <th >{{__('Name')}}</th>
                         <th >{{__('Group Type')}}</th>
                         <th >{{__('Position')}}</th>
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
    $('#Customergroup').DataTable({
    processing: true,
    serviceSide:true,
    language: {
    paginate: {
      next: '<i class="fa fa-chevron-right">',
      previous: '<i class="fa fa-chevron-left">'
    }
  },
    ajax:'{!! route('admin.Customer Group.data') !!}',
    columns:[
	   {data: 'banner_groups.name',     name: 'banner_groups.name' },
	   {data: 'name',     name: 'name' },
	   {data: 'scheduled', name:'scheduled'},
	   {data: 'expired', name:'expired'},
	   {data: 'status',   name:'status'},
	   {data: 'action',   name:'action', orderable:false, searchable:false},
    ]

    });
});
</script>
@endsection
