@extends('admin.layouts.master')

@section('title')
@lang('Country')
@endsection

@section('page-header')
<h1>@Lang('Country')</h1>

@endsection
@section('content')
 <div class="row">
     <div class="col-sm-12">
       <div class="box box-pink">
       <div class="box-header">
          <div class="box-title">@lang('Country')</div>
          @role('Admin')
                <div class="pull-right box-tools">
                @permission('all')
                <button href="{!! url('admin.countries.create')  !!}" type="button" class="btn btn-circle btn-info" data-toggle="tooltip" title="{{__('Add')}}" data-placement="left" >
			        	<span><i class="fa fa-plus"></i></span>
			        	</button>
                <button href="{!! url('admin.countries.destroy')  !!}" type="button" class="btn btn-circle btn-pink" ><span><i class="fa fa-trash"></i></span></button>

                @endpermission
               </div>
          @endrole
       </div><!--box-header-->
       <div class="box-body">
             <table id="country " class="table table-bordered">
                    <thead>
                       <tr>
				         <th class="text-left"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked',this.checked);" /></th>
                         <th >{{__('Name')}}</th>
                         <th >{{__('Iso_code_2')}}</th>
                         <th >{{__('Iso_code_3')}}</th>
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
    $('#country').DataTable({
    processing: true,
    serviceSide:true,
    language: {
    paginate: {
      next: '<i class="fa fa-chevron-right">',
      previous: '<i class="fa fa-chevron-left">'
    }
  },
    ajax:'{!! route('admin.countries.data') !!}',
    columns:[
	   {data: 'checkbox',     name: 'checkbox' },
	   {data: 'name',     name: 'name' },
	   {data: 'iso_code_2', name:'iso_code_2'},
	   {data: 'iso_code_3', name:'iso_code_3'},
	   {data: 'status',   name:'status'},
	   {data: 'action',   name:'action', orderable:false, searchable:false},
    ]

    });
});
</script>
@endsection
