<!--customer type personal or corporate -->
<div class="form-group">
    {!! Form::label('customer_type', @lang'Customer Type', ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}  
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        <div class="radio  radio-warning radio-inline ">
            <input type="radio" id="radio5" name="customer_type[1]" value= "1" {{old('customer_type.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
            <label for="radio5">{{__('Personal')}}</label>
          </div>
         <div class="radio  radio-danger radio-inline ">
             <input type="radio" id="radio6" name="customer_type[0]" value="0" {{old('customer_type.0')=="0"? 'checked='.'"'.'checked'.'"': '' }}  />
             <label for="radio6">{{__('Corporate')}}</label>
         </div>
             {!! $errors->Company('customer_type', '<p class="help-block">:message</p>') !!}                 
             
         </div>   
             
</div>

</div><!--selected customer type-->
<!--customer type == corporate only -->
<div class="form-group required">
    {!! Form::label('$address->company', @lang('Company Name'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
     {!! Form::text('$address->company', ['class'=>'form-control',  'placeholder'=>'{{__('Company Name')}}', 'value'=>Input::old('$address->company') ]) !!} 
     {!! $errors->Company('$address->company', '<p class="help-block">:message</p>') !!}         
    </div>
 </div><!---company name-->
 <div class="form-group required">
    {!! Form::label('$address->company_id', @lang('Company ID'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
     {!! Form::text('$address->company_id', ['class'=>'form-control',  'placeholder'=>'{{__('Company ID')}}', 'value'=>Input::old('$address->company_id') ]) !!} 
     {!! $errors->Company('$address->company_id', '<p class="help-block">:message</p>') !!}         
    </div>
 </div><!---company id-->
 <div class="form-group required">
    {!! Form::label('$address->tax_id', @lang('Company Tax ID'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
     {!! Form::text('$address->tax_id', ['class'=>'form-control',  'placeholder'=>'{{__('Company Tax ID')}}', 'value'=>Input::old('$address->tax_id') ]) !!} 
     {!! $errors->Company('$address->tax_id', '<p class="help-block">:message</p>') !!}         
    </div>
 </div><!---company id-->
<!--common  -->
<div class="form-group required">
    {!! Form::label('telephone', @lang('Telephone'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!} 
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
    {!! Form::text('telephone', ['class'=>'form-control',  'placeholder'=>'{{trans('Telephone')}}', 'value'=>Input::old('telephone') ]) !!} 
    {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}                
    </div>    
                                              
</div><!---Telephone-->
<div class="form-group ">
    {!! Form::label('fax', @lang('Fax'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!} 
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
    {!! Form::text('fax', ['class'=>'form-control',  'placeholder'=>'{{trans('Fax')}}', 'value'=>Input::old('Fax') ]) !!} 
    </div>   
</div><!---Fax-->   

<!--is primary address same as billing or shipping -->
<table class="table table-bordered  nmt">
    <thead>
         <tr>
             <th class="text-left">{{__('$Address->address1')}}</th>
             <th class="text-left">{{__('$Address->address2')}}</th>
             <th class="text-left">{{__('$Address->city')}}</th>
             <th class="text-left">{{__('$Address->postcode')}}</th>
             <th class="text-left">{{__('$Address->Region/State')}}</th>
             <th class="text-left">{{__('$Address->Country')}}</th>
             <th class="text-left">{{__('Action')}}</th>	
         </tr>
     </thead>
    <tbody>
         <tr>
             <td data-title="{{__('Address 1')}}">
                {!! Form::text('$address->address_1', ['class'=>'form-control',  'placeholder'=>'{{__('Company ID')}}', 'value'=>Input::old('$address->address_1') ]) !!} 
             </td>
             <td data-title="{{__('Address 2')}}">
                {!! Form::text('$address->address_2', ['class'=>'form-control',  'placeholder'=>'{{__('Company ID')}}', 'value'=>Input::old('$address->address_2') ]) !!} 
            </td>
            <td data-title="{{__('City')}}">
                {!! Form::text('$address->city->name', ['class'=>'form-control',  'placeholder'=>'{{__('Company ID')}}', 'value'=>Input::old('$address->city->name') ]) !!} 
            </td>
            <td data-title="{{__('Postcode')}}">
                {!! Form::text('$address->postcode', ['class'=>'form-control',  'placeholder'=>'{{__('Company ID')}}', 'value'=>Input::old('$address->postcode') ]) !!} 
            </td>
            <td data-title="{{__('Region/State')}}">
                {!! Form::select(['name', $state, null, 'class' => 'form-control', 'id'="name", 'multiple' => 'multiple' 'value'=>Input::old('name') ]) !!}
            </td>
            <td data-title="{{__('Country')}}">
                {!! Form::select(['name', $country, null, 'class' => 'form-control', 'id'="name", 'multiple' => 'multiple' 'value'=>Input::old('name') ]) !!}
            </td>
             <td  class="text-left" data-title="{{__('Action')}}">
                 
  <button type="button" onclick="$('#address-row').remove();" data-toggle="tooltip" title="remove" class="btn btn-danger btn-line btn-sm">
     <i class="fa fa-minus-circle"></i>
  </button>   
 
             </td>	
         </tr>
     </tbody>
    <tfoot>
         <tr>
          <td colspan="7"></td>
         <td data-title="{{__('Action')}}">
             <button type="button" onclick="addaddress();" data-toggle="tooltip" title="remove" class="btn btn-info btn-line btn-sm">
     <i class="fa fa-plus-circle"></i>
</button>   
          </td>
          </tr>	
     </tfoot>
  </table> 
