<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-11">
<div class="tabs-custom">
    <ul class="nav nav-tabs">
       <li class="active"><a href="#general" data-toggle="tab">{{trans('General')}}</a></li>
    </ul>
<div class="tab-content">
    <div class="tab-pane fade active in" id="general"> 
       <div class="form-group required">
                                    {!! Form::label('title', @lang('Length Title'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}  
                                       
                                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                      {!! Form::text('title', ['class'=>'form-control',  'placeholder'=>{{__('Length Title')}}, 'value'=>Input::old('title') ]) !!} 
                                      {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                                      
                                      </div>
                                    </div><!---Length Title-->
                                    <div class="form-group required">
                                    {!! Form::label('unit', @lang('Length Unit'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}  
                                       
                                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                      {!! Form::text('unit', ['class'=>'form-control',  'placeholder'=>{{__('Length Unit')}}, 'value'=>Input::old('unit') ]) !!} 
                                      {!! $errors->first('unit', '<p class="help-block">:message</p>') !!}
                                      </div>
                                    </div><!--- Length Unit-->
                                    <div class="form-group">
                                    {!! Form::label('value', @lang('Length Value'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}  
                                      <span data-toggle="popover"  data-content="Set to 1.00000 if this is your default Length.">
                                            <i class="ion ion-flag text-red"></i>    
                                       </span> 
                                       
                                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                       {!! Form::text('value', ['class'=>'form-control',  'placeholder'=>{{__('Length Value')}}, 'value'=>Input::old('value') ]) !!}   
                                      </div>
                                    </div><!--- Length Unit-->
                                    <div class="form-group">
                                     {!! Form::label('default', @lang('Default Unit'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}  
                                     <span data-toggle="popover"  data-content="Set as base length.">
                                            <i class="ion ion-flag text-red"></i>    
                                     </span>  
                                     
                                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <div class="checkbox  checkbox-info checkbox-inline ">
                                                <input type="checkbox" id="checkbox1" name="default[0]" value="0" {{old('default.0')=="0"? 'checked='.'"'.'checked'.'"': '' }} />
                                                <label for="checkbox1">@lang('Yes')</label>  
                                         </div>
                                         <div class="checkbox  checkbox-info checkbox-inline ">
                                                <input type="checkbox" id="checkbox2" name="default[1]" value="1" {{old('default.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
                                                <label for="checkbox2">@lang('No')</label>  
                                         </div> 
                                       </div>
                                     
                                    </div><!--- Default-->




    </div><!--general--> 
</div><!--tab-content-->
</div><!--col-->

</div><!--row-->
