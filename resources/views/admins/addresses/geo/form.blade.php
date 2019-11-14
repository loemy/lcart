<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="custom-tab" role="tabpanel" id="tabSet">
        <ul class="nav nav-tabs">
              <li class="active"><a href="#general" data-toggle="tab">{{__('General')}} </a></li>

        </ul>
        <div class="tab-content">
         <div class="tab-pane fade active in" id="general">
           <div class="form-group required">
                {!! Form::label('name', @lang('Geo Name'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                {!! Form::text('name', ['class'=>'form-control',  'placeholder'=>'{{__('Geo Name')}}', 'value'=>Input::old('name') ]) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>

            </div><!---geo name-->
            <div class="form-group required">
                {!! Form::label('description', @lang('Geo Description'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                {!! Form::textarea('description', ['class'=>'form-control',  'id' => 'Geo', 'placeholder'=>'{{__('Geo Description')}}', 'cols' => '10', 'row'=> '40', 'value'=>Input::old('description') ]) !!}
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>

            </div><!---geo description-->
            <legend><h4 class="text-orange">{{__('Country Zone')}}</h4></legend>
                    <section>
                    <table  class="table table-striped table-bordered nmt">
                         <thead>
                                <tr>
                                <th class="text-left">@lang('Country')</th>
                                <th class="text-left">@lang('Zone')</th>
                                 <th class="text-left">@lang('Action')</th>

                                </tr>
                         </thead>
                         <tbody>
                                <tr>
                                <td class="text-left" data-title="@lang('Country')">


                                @foreach ($countries as $country)
                                  <select name="zone_to_geo_zone" class="form-control chosen">
                                     <option value=""></option>
                                   </select>
                                @endforeach

                                </td>
                                <td class="text-left" data-title="@lang('Zone')">
                                  <select name="zone_to_geo_zone" class="form-control chosen">
                                  <option value=""></option>
                                   </select>
                                </td>
                                <td class="text-left" data-title="@lang('Action')">
                                <button type="button" onclick="$('#zone-to-geo-zone-row').remove();" data-toggle="tooltip" title="remove" class="btn btn-danger btn-line btn-sm">
                                <i class="fa fa-minus-circle"></i>
                                </button>
                                </td>
                                </tr>
                        </tbody>
                        <tfoot>
                                <tr>
                                 <td colspan="2"></td>
                                 <td class="text-left">
                                 <button type="button" onclick="addGeoZone();" data-toggle="tooltip" title="add" class="btn btn-primary btn-line btn-sm">
                                 <i class="fa fa-plus-circle"></i>
                                 </button>
                                 </td>
                                 </tr>

                        </tfoot>
                    </table>
                   </section><!--table-->

         </div><!--general-->

        </div><!--tabs-content-->
</div><!--tabs-->
</div><!--col-->

</div><!--row-->
