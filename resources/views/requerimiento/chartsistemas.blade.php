@extends('adminlte::page')
    
 @section('content')   
    
        
 <div class="form-group">
    {{ Form::label('Area') }}
    {{ Form::select('Area', $estados ,null, ['class' => 'form-control' . ($errors->has('Area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
    {!! $errors->first('Area', '<div class="invalid-feedback">:message</p>') !!}
</div>
    
@endsection

