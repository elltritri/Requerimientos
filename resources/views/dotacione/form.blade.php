<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreyapellido') }}
            {{ Form::text('nombreyapellido', $dotacione->nombreyapellido, ['class' => 'form-control' . ($errors->has('nombreyapellido') ? ' is-invalid' : ''), 'placeholder' => 'Nombreyapellido']) }}
            {!! $errors->first('nombreyapellido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Area') }}
            {{ Form::select('Area', $sector ,null, ['class' => 'form-control' . ($errors->has('Area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('Area', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>