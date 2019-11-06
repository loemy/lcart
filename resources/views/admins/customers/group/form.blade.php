<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="tabs-custom">
        <ul class="nav nav-tabs">
              <li class="active"><a href="#general" data-toggle="tab">{{trans('General')}} </a></li>
              <li ><a href="#data" data-toggle="tab"> {{trans('Data')}}</a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane fade active in" id="general">
         <div class="form-group required">
                                   {!! Form::label('name', @Lang('Customer Group Name'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                   
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                     {!! Form::text('name', ['class'=>'form-control',  'placeholder'=>'Customer Group', 'value'=>Input::old('name') ]) !!} 
                                     {!! $errors->first('name', '<p class="help-block">:message</p>') !!}         
                                    </div>
        </div><!--Customer Group Name-->
        <div class="form-group required">
                                 {!! Form::label('description', @Lang('Customer Group Description'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                  
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                      {!! Form::textarea('description', ['class'=>'form-control', 'id' => 'description', 'placeholder'=>'{{__('Customer Group Description')}}', 'cols' => '10', 'row'=> '5', 'value'=>Input::old('description')]) !!}             
                                      {!! $errors->first('description', '<p class="help-block">:message</p>') !!}         
                                    </div>
        </div><!--Customer Group Description--> 
        <div class="form-group">
                                 {!! Form::label('$type->name', @Lang('Customer Group type'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                  
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                      {!! Form::select(['name', $types, null, 'class' => 'form-control', 'id'="name", 'multiple' => 'multiple' 'value'=>Input::old('$type->name') ]) !!}
                                    </div>
        </div><!--Customer Group Description-->  
        <div class="form-group">
                                 {!! Form::label('approval', @Lang('Approve New Customers'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                  <span data-toggle="popover"  data-content="{{__('Customers must be approved by an administrator before they can login.')}}">
                                         <i class="ion ion-flag text-maroon"></i>    
                                   </span>     
                                   <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"> 
                                         <div class="radio  radio-success radio-inline ">
                                         <input type="radio" id="radio1" name="approval[1]" value= "1" {{old('approval.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
                                         <label for="radio1">{{__('Yes')}}</label>
                                         </div>
                                          <div class="radio  radio-danger radio-inline ">
                                          <input type="radio" id="radio2" name="approval[0]" value= "0" {{old('approval.0')=="0"? 'checked='.'"'.'checked'.'"': '' }} />
                                          <label for="radio2">{{__('No')}}</label>
                                        </div>
                                     </div>      
                                       
                                         
        </div><!--- approved-->  
        <div class="form-group">
                                 {!! Form::label('company_id_display', @Lang('Display Company No'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                 <span data-toggle="popover"  data-content="{{__('Display a company number field')}}">
                                         <i class="ion ion-flag text-maroon"></i>    
                                  </span>      
                                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"> 
                                         <div class="radio  radio-success radio-inline ">
                                         <input type="radio" id="radio3" name="company_id_display[1]" value= "1" {{old('company_id_display.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
                                         <label for="radio3">{{__('Yes')}}</label>
                                         </div>
                                          <div class="radio  radio-danger radio-inline ">
                                          <input type="radio" id="radio4" name="company_id_display[0]" value= "0" {{old('company_id_display.0')=="0"? 'checked='.'"'.'checked'.'"': '' }} />
                                          <label for="radio4">{{__('No')}}</label>
                                          
                                        </div>
                                   </div>        
                                   
                                        
        </div><!--- co No-->
        <div class="form-group">
                                 {!! Form::label('company_id_required', @Lang('Company No Required'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                 <span data-toggle="popover"  data-content="{{__('Select which customer groups must enter their company number
                                        for billing addresses before checkout')}}">
                                         <i class="ion ion-flag text-maroon"></i>    
                                  </span>      
                                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"> 
                                         <div class="radio  radio-success radio-inline ">
                                         <input type="radio" id="radio5" name="company_id_required[1]" value= "1" {{old('company_id_required.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
                                         <label for="radio5">{{__('Yes')}}</label>
                                          
                                         </div>
                                          <div class="radio  radio-danger radio-inline ">
                                          <input type="radio" id="radio6" name="company_id_required[0]" value= "0" {{old('company_id_required.0')=="0"? 'checked='.'"'.'checked'.'"': '' }} />
                                          <label for="radio6">{{__('No')}}</label>
                                        </div>
                                  </div>      
                                        
                                          
        </div><!--- co No-->
        <div class="form-group">
                                 {!! Form::label('tax_id_display', @Lang('Display Tax ID'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                 <span data-toggle="popover"  data-content="{{__('Display a Tax ID. field for billing addresses')}}">
                                         <i class="ion ion-flag text-maroon"></i>    
                                  </span>      
                                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"> 
                                         <div class="radio  radio-success radio-inline ">
                                          <input type="radio" id="radio7" name="tax_id_display[1]" value= "1" {{old('tax_id_display.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
                                          <label for="radio7">{{__('Yes')}}</label>
                                         </div>
                                          <div class="radio  radio-danger radio-inline ">
                                          <input type="radio" id="radio8" name="tax_id_display[0]" value= "0" {{old('tax_id_display.0')=="0"? 'checked='.'"'.'checked'.'"': '' }} />
                                          <label for="radio8">{{__('No')}}</label>
                                        </div>
                                   </div>        
                                 
                                        
        </div><!--- Tax No-->
        <div class="form-group">
                                 {!! Form::label('payment_allowed', @Lang('Payment Allowed'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                 
                                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"> 
                                         <div class="radio  radio-success radio-inline ">
                                          <input type="radio" id="radio9" name="payment_allowed[1]" value= "1" {{old('payment_allowed.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
                                          <label for="radio9">{{__('Yes')}}</label>
                                         </div>
                                          <div class="radio  radio-danger radio-inline ">
                                          <input type="radio" id="radio10" name="payment_allowed[0]" value= "0" {{old('payment_allowed.0')=="0"? 'checked='.'"'.'checked'.'"': '' }} />
                                          <label for="radio10">{{__('No')}}</label>
                                        </div>
                                   </div>        
                                 
                                        
        </div><!--- payment_allowed-->
        <div class="form-group">
                                 {!! Form::label('shipment_allowed', @Lang('Shipment Allowed'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                 
                                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"> 
                                         <div class="radio  radio-success radio-inline ">
                                          <input type="radio" id="radio11" name="shipment_allowed[1]" value= "1" {{old('shipment_allowed.1')=="1"? 'checked='.'"'.'checked'.'"': '' }} />
                                          <label for="radio11">{{__('Yes')}}</label>
                                         </div>
                                          <div class="radio  radio-danger radio-inline ">
                                          <input type="radio" id="radio12" name="shipment_allowed[0]" value= "0" {{old('shipment_allowed.0')=="0"? 'checked='.'"'.'checked'.'"': '' }} />
                                          <label for="radio12">{{__('No')}}</label>
                                        </div>
                                   </div>        
                                 
                                        
                                </div><!--- shipment_allowed-->
                                
        <div class="form-group ">
                                {!! Form::label('payment_terms', @Lang('Payment Terms'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                       {!! Form::text('payment_terms', ['class'=>'form-control',  'placeholder'=>'Customer Group', 'value'=>Input::old('payment_terms') ]) !!} 
                                     
                                    </div>
                                </div><!--Sort Order-->
                                <div class="form-group ">
                                {!! Form::label('position', @Lang('Sort Order'), ['class' => 'col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label']) !!} 
                                  
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                     {!! Form::text('position', ['class'=>'form-control',  'placeholder'=>'Sort Order', 'value'=>Input::old('position') ]) !!} 
                                     
                                    </div>
        </div><!--Sort Order-->
         
         </div><!--general-->
         <div class="tab-pane fade  in" id="data"></div><!--data-->
        </div><!--tabs-content-->
</div><!--tabs-->
</div><!--col-->

</div><!--row-->