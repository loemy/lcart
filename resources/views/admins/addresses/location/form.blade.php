<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="custom-tab" role="tabpanel" id="tabSet">
        <ul class="nav nav-tabs">
              <li class="active"><a href="#general" data-toggle="tab">{{__('General')}} </a></li>
              <li ><a href="#data" data-toggle="tab"> {{__('Data')}}</a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane fade active in" id="general">
                                           <div class="form-group">
							            {!! Form::label('parent_id', @lang('Parent Location'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}

                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            {!! Form::select('parent_id', ['class' => 'form-control' 'multiple'=>'multiple', 'id'=>'parent_id']) !!}
                                            </div>

                                 </div><!--parent-->


                                    <div class="form-group required">
                                    {!! Form::label('name', @lang('Location Name'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}

                                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                      {!! Form::text('name', ['class'=>'form-control',  'placeholder'=>'{{__('Location')}}', 'value'=>Input::old('name') ]) !!}
                                      {!! $errors->first('name', '<p class="help-block">:message</p>') !!}

                                      </div>
                                    </div><!--Location Name-->
                                    <div class="form-group required">
                                    {!! Form::label('address', @lang('Address'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}

                                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        {!! Form::textarea('address', ['class'=>'form-control', 'id' => 'address', 'placeholder'=>'address', 'cols' => '40', 'row'=> '5',
                                      'value'=>Input::old('address')]) !!}
                                      {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                                      </div>
                                    </div><!--- Address-->
                                    <div class="form-group">
                                    {!! Form::label('telephone', @lang('Telephone'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}

                                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                       {!! Form::text('telephone', ['class'=>'form-control',  'placeholder'=>'{{__('Telephone')}}', 'value'=>Input::old('telephone') ]) !!}
                                      </div>
                                    </div><!--- telephone-->
                                     <div class="form-group">
                                    {!! Form::label('fax', @lang('Fax'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}

                                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                       {!! Form::text('fax', ['class'=>'form-control',  'placeholder'=>'{{__('fax')}}', 'value'=>Input::old('fax') ]) !!}
                                      </div>
                                    </div><!--- fax-->
                                    <div class="form-group">
                                     {!! Form::label('latitude', @lang('Latitude'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
                                     <span data-toggle="popover"  data-content="{{__('Enter a decimal value, i.e London: 51.500152')}}">
                                     <i class="ion ion-flag text-red"></i>
                                     </span>
                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                       {!! Form::text('latitude', ['class'=>'form-control',  'placeholder'=>'Latitude', 'value'=>Input::old('latitude') ]) !!}

                                      </div>
                                    </div><!--- latitude-->
                                     <div class="form-group">
                                     {!! Form::label('longitude', @lang('Longitude'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
                                     <span data-toggle="popover"  data-content="{{__('Enter a decimal value, i.e London: -0.126236')}}">
                                     <i class="ion ion-flag text-red"></i>
                                     </span>
                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                       {!! Form::text('longitude', ['class'=>'form-control',  'placeholder'=>'{{__('Longitude')}}', 'value'=>Input::old('longitude') ]) !!}

                                      </div>
                                    </div><!--- longitude-->

                                    <div class="form-group">
                                     {!! Form::label('open', @lang('Open Hour'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                      {!! Form::text('open', ['class'=>'form-control',  'placeholder'=>'{{__('Open')}}', 'value'=>Input::old('open') ]) !!}
                                     </div>
                                    </div><!--open-->
                                    <div class="form-group">
                                     {!! Form::label('comment', @lang('Remark'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                     {!! Form::textarea('comment', ['class'=>'form-control', 'id' => 'description', 'placeholder'=>'{{__('Comment')}}',  'value'=>Input::old('comment')]) !!}
                                     </div>
                                    </div><!--comment-->

         </div><!--general-->
         <div class="tab-pane fade  in" id="data">
         <div class="form-group">
				                           {!! Form::label('image', @lang('Image'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}

                                        <div class="col-sm-4">
                                        <div class="store-card">
					                         <img class="img-reponsive" alt="" src="" width="60" height="60" id="thumb">
					                          <input type="hidden" name="image" value="{{$image}}" id="image" />
				                             </div>
				                             <div class="text-center">
				                           	 <a onclick="img_upload('image,thumb');" class="btn btn-primary btn-line btn-xs"><i class="fa fa-search"></i></a>
                                           <a onclick="$('#thumb').attr('src');$('#image').attr('value','');" class="btn btn-danger btn-line btn-xs"><i class="fa fa-eraser"></i></a>
				                              </div>
                                            </div>
                                          </div><!--image-->
         </div><!--data-->
        </div><!--tabs-content-->
</div><!--tabs-->
</div><!--col-->

</div><!--row-->
