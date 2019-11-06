<div class="form-group">
      {!! Form::label('$customer_groups->name', @lang('Customer Groups Name'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
      {!! Form::select('name', $customer_groups, null,  ['class' => 'form-control'],'id'=>'Customer Groups', 'multiple'=>'multiple','value'=>Input::old('$customer_groups->name')) !!}
</div>

</div><!--selected customer group-->
<div class="form-group required">
    {!! Form::label('firstname', @lang('First Name'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
     {!! Form::text('firstname', ['class'=>'form-control',  'placeholder'=>'{{__('First Name')}}', 'value'=>Input::old('firstname') ]) !!}
     {!! $errors->first('firstname', '<p class="help-block">:message</p>') !!}
    </div>
 </div><!---FName-->
  <div class="form-group required">
  {!! Form::label('lastname', @lang('Last Name'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!}
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
    {!! Form::text('lastname', ['class'=>'form-control',  'placeholder'=>'{{__('Last Name')}}', 'value'=>Input::old('lastname') ]) !!}
    {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
  </div>


 </div><!---LName-->
 <div class="form-group">
    {!! Form::label('designation', @lang('Designation'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
      {!! Form::text('designation', ['class'=>'form-control',  'placeholder'=>'{{__('Designation')}}', 'value'=>Input::old('designation') ]) !!}

    </div>


  </div><!---LName-->
 <div class="form-group required">
 {!! Form::label('email', @lang('Email'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!}
 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  {!! Form::email('email', ['class'=>'form-control',  'placeholder'=>'{{__('Email')}}', 'value'=>Input::old('email') ]) !!}
  {!! $errors->first('email', '<p class="help-block">:message</p>') !!}

 </div>

 </div><!---Email-->
 <div class="form-group required">
    {!! Form::label('password', @lang('Password'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
       {!! Form::password('password', ['class'=>'form-control',  'placeholder'=>'{{__('Password')}}', 'value'=>Input::old('password') ]) !!}
       {!! $errors->first('password', '<p class="help-block">:message</p>') !!}

     </div>

</div><!---Password-->

 <div class="form-group required">
 {!! Form::label('telephone', @lang('Telephone'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!}
 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
   {!! Form::text('telephone', ['class'=>'form-control',  'placeholder'=>'{{__('Telephone')}}', 'value'=>Input::old('telephone') ]) !!}
   {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
 </div>

 </div><!---Telephone-->
 <div class="form-group ">
  {!! Form::label('fax', @lang('Fax'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!}
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
  {!! Form::text('fax', ['class'=>'form-control',  'placeholder'=>'{{__('Fax')}}', 'value'=>Input::old('Fax') ]) !!}
  </div>


 </div><!---Fax-->
 <h4 class="headline2">{{__('Confirmation Details')}}</h4>
 <div class="form-group required">
 {!! Form::label('confirmed', @lang('Confirm'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!}
 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
   <div class="radio  radio-warning radio-inline ">
   <input type="radio" id="radio1" name="confirmed[1]" value= "1" {{old('confirmed.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
   <label for="radio1">{{__('Yes')}}</label>
 </div>
<div class="radio  radio-danger radio-inline ">
    <input type="radio" id="radio2" name="confirmed[0]" value="0" {{old('confirmed.0')=="0"? 'checked='.'"'.'checked'.'"': '' }}  />
    <label for="radio2">{{_('No')}}</label>
</div>
    {!! $errors->first('confirmed', '<p class="help-block">:message</p>') !!}

</div>

 </div><!---Confirm-->
 <div class="form-group ">
    {!! Form::label('confirmed_at', @lang('Confirmed At', ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
    {!! Form::text('confirmed_at', ['class'=>'form-control',  'placeholder'=>'confirmed_at', 'value'=>Input::old('confirmed_at') ]) !!}
    </div>


</div><!---confirm at-->
<div class="form-group required">
    {!! Form::label('approved', @lang('Confirm'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
      <div class="radio  radio-warning radio-inline ">
      <input type="radio" id="radio3" name="approved[1]" value= "1" {{old('approved.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
      <label for="radio3">{{__('Yes')}}</label>
    </div>
   <div class="radio  radio-danger radio-inline ">
       <input type="radio" id="radio4" name="approved[0]" value="0" {{old('approved.0')=="0"? 'checked='.'"'.'checked'.'"': '' }}  />
       <label for="radio4">{{__('No')}}</label>
   </div>
       {!! $errors->first('approved', '<p class="help-block">:message</p>') !!}

   </div>

    </div><!---For Online register-->

<div class="form-group ">
        {!! Form::label('status', @lang('Status'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        {!! Form::select('status', ['{{__('Disable')}}','{{__('Enable')}}'], ['class' => 'form-control']) !!}
        </div>
</div><!---Status-->
