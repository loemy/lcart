@extends('admin.layouts.master')

@section('title')
 @lang('Length')
@endsection

@section('page-header')
<h1>@lang('Length')</h1>

@endsection
@section('content')
 <div class="row">
     <div class="col-sm-12">
       <div class="box box-pink">
       <div class="box-header">
          <div class="box-title"> @lang('Length')</div>
          @role('Admin')
                <div class="pull-right box-tools">
                @permission('all')
                <button href="{!! url('admin.lengths.create')  !!}" type="button" class="btn btn-circle btn-info" data-toggle="tooltip" title="{{__('Add')}}" data-placement="left" >
				        <span><i class="fa fa-plus"></i></span>
				        </button>
                <button href="{!! url('admin.lengths.destroy')  !!}" type="button" class="btn btn-circle btn-pink" ><span><i class="fa fa-trash"></i></span></button>
                @endpermission
               </div>
          @endpermission
       </div><!--box-header-->
       <div class="box-body">
             <table id="Length" class="table table-bordered">
                    <thead>
                       <tr>
				         <th class="text-left"><input type="checkbox" onclick="$("input[name*=\"selected\"]").attr('checked',this.checked);" /></th>
                         <th >{{__('Length Title')}}</th>
                         <th >{{__('Unit')}}</th>
                         <th >{{__('Value')}}</th>
                         <th >{{__('Default')}}</th>
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
    $('#Length').DataTable({
    processing: true,
    serviceSide:true,
    language: {
    paginate: {
      next: '<i class="fa fa-chevron-right">',
      previous: '<i class="fa fa-chevron-left">'
    }
  },
    ajax:'{!! route('admin.lengths.data') !!}',
    columns:[
	   {data: 'checkbox',   name: 'checkbox' },
	   {data: 'title',      name: 'title' },
	   {data: 'unit',       name:'unit'},
	   {data: 'value',      name:'value'},
	   {data: 'action',     name:'action', orderable:false, searchable:false},
    ]

    });
});
</script>
@endsection
