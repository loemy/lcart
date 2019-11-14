<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="tabs-custom">
        <ul class="nav nav-tabs">
              <li class="active"><a href="#general" data-toggle="tab">{{trans('General')}} </a></li>
             
        </ul>
        <div class="tab-content">
         <div class="tab-pane fade active in" id="general">
          <div class="form-group">
             {!! Form::label('$country->name', @Lang('Country'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	        {!! Form::select(['name', ([0 => '{{__('Please select a Country')}}'] + $countries), null, 'class' => 'form-control', 'id'="name", 'multiple' => 'multiple' 'value'=>Input::old('name') ]) !!}
             
             </div>        
          </div><!--Country-->
           <div class="form-group required">
                {!! Form::label('name',@Lang('State name'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!} 
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                {!! Form::text('name', ['class'=>'form-control',  'placeholder'=>'{{__('State name')}}', 'value'=>Input::old('name') ]) !!}
                 @if($error->has('name'))<p class="help-block">{{ $error->first('name') }} </p> @endif 
                </div>        
           </div><!---State name-->
            <div class="form-group required">
                {!! Form::label('code',@Lang('State code'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!} 
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                {!! Form::text('code', ['class'=>'form-control',  'placeholder'=>'{{__('State code')}}', 'value'=>Input::old('code') ]) !!}
                 @if($error->has('code'))<p class="help-block">{{ $error->first('code') }} </p> @endif 
                </div>        
           </div><!---State code-->
           <div class="form-group">
                                
               {!! Form::label('status', @Lang('Status'), ['class' => 'col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label']) !!}
               <div class="col-sm-4">
	        	{!! Form::select('status', [('0'=>'{{__('Disable')}}','1'=>'{{__('Enable')}}')], ['class' => 'form-control']) !!}    
                </div>
           </div><!--status-->


                  </div><!--general-->
         
        </div><!--tabs-content-->
</div><!--tabs-->
</div><!--col-->

</div><!--row-->