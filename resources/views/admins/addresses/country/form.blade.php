<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="custom-tab" role="tabpanel" id="tabSet">
        <ul class="nav nav-tabs">
              <li class="active"><a href="#general" data-toggle="tab">{{__('General')}} </a></li>

        </ul>
        <div class="tab-content">
         <div class="tab-pane fade active in" id="general">
         <div class="form-group required">
                {!! Form::label('name', @lang('Country Name'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                {!! Form::text('name', ['class'=>'form-control',  'placeholder'=>'{{__('Country Name')}}', 'value'=>Input::old('name') ]) !!}

                @if($error->has('name'))<p class="help-block">{{ $error->first('name') }} </p> @endif
                </div>

        </div><!---country Name -->
		<div class="form-group">
                {!! Form::label('iso_code_2', @lang('Iso Code 2'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                {!! Form::text('iso_code_2', ['class'=>'form-control',  'placeholder'=>'{{__('Iso Code 2')}}', 'value'=>Input::old('iso_code_2') ]) !!}

                </div>

        </div><!---iso 2 -->
		<div class="form-group">
               {!! Form::label('iso_code_3', @lang('Iso Code 3'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
               <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
               {!! Form::text('iso_code_3', ['class'=>'form-control',  'placeholder'=>'{{__('Iso Code 3')}}', 'value'=>Input::old('iso_code_3') ]) !!}

               </div>

        </div><!---iso 3 -->
		<div class="form-group">
               {!! Form::label('calling_code', @lang('Calling Code'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
               <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
               {!! Form::text('calling_code', ['class'=>'form-control',  'placeholder'=>'{{__('Calling Code')}}', 'value'=>Input::old('calling_code') ]) !!}

               </div>

        </div><!---calling_code -->
		<div class="form-group">
               {!! Form::label('address_format', @lang('Address Format'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
               <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
               {!! Form::textarea('address_format', ['class'=>'form-control',  'placeholder'=>'{{__('Address Format')}}', 'row' => '10', 'value'=>Input::old('address_format') ]) !!}

               </div>

       </div><!---calling_code -->

        <div class="form-group">
                                     {!! Form::label('postcode_required', 'It post code required', ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
                                     <div class="col-sm-4">
					                       <div class="radio  radio-warning radio-inline ">
                                             <input type="radio" id="radio1" name="postcode_required[1]" value= "1" {{old('postcode_required.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
                                             <label for="radio1">Yes</label>
                                           </div>
													<div class="radio  radio-danger radio-inline ">
                                              <input type="radio" id="radio2" name="postcode_required[0]" value="0" {{old('postcode_required.0')=="0"? 'checked='.'"'.'checked'.'"': '' }}  />
                                              <label for="radio2">No</label>
                                        </div>
                                     </div> <!--post remove-->
               {!! Form::label('status', @lang('Status'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
               <div class="col-sm-4">
		     	{!! Form::select('status', [('0'=>'{{__('Disable')}}','1'=>'{{__('Enable')}}')], ['class' => 'form-control']) !!}
                </div>
        </div><!--status-->

         </div><!--general-->

        </div><!--tabs-content-->
</div><!--tabs-->
</div><!--col-->

</div><!--row-->
