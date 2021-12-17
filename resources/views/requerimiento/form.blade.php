<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Area') }}
            {{ Form::select('Area', $sectores ,null, ['class' => 'form-control' . ($errors->has('Area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('Area', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('Fecha', 'FECHA', ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TareaSolicitada') }}
            {{ Form::text('TareaSolicitada', $requerimiento->TareaSolicitada, ['class' => 'form-control' . ($errors->has('TareaSolicitada') ? ' is-invalid' : ''), 'placeholder' => 'Tareasolicitada']) }}
            {!! $errors->first('TareaSolicitada', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('Observaciones', $requerimiento->Observaciones, ['class' => 'form-control' . ($errors->has('Observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('Observaciones', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estado', $estados, null,['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaEntrega') }}
            {{ Form::date('FechaEntrega', $requerimiento->FechaEntrega, ['class' => 'form-control' . ($errors->has('FechaEntrega') ? ' is-invalid' : ''), 'placeholder' => 'Fechaentrega']) }}
            {!! $errors->first('FechaEntrega', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Personal') }}
            {{ Form::text('Personal', $requerimiento->Personal, ['class' => 'form-control' . ($errors->has('Personal') ? ' is-invalid' : ''), 'placeholder' => 'Personal']) }}
            {!! $errors->first('Personal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>