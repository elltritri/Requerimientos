<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $estadorequerimiento->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sectorEstado') }}
            {{ Form::select('sectorEstado', $sectore,null, ['class' => 'form-control' . ($errors->has('sectorEstado') ? ' is-invalid' : ''), 'placeholder' => 'Elegir Sector']) }}
            {!! $errors->first('sectorEstado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
      
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>