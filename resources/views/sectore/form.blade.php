<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sectores') }}
            {{ Form::text('sectores', $sectore->sectores, ['class' => 'form-control' . ($errors->has('sectores') ? ' is-invalid' : ''), 'placeholder' => 'Sectores']) }}
            {!! $errors->first('sectores', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>