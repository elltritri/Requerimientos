@extends('adminlte::page')
@section('template_title')
    {{ $requerimiento->name ?? 'Show Requerimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Requerimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('requerimientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $requerimiento->Area }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $requerimiento->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Tareasolicitada:</strong>
                            {{ $requerimiento->TareaSolicitada }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $requerimiento->Observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $requerimiento->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaentrega:</strong>
                            {{ $requerimiento->FechaEntrega }}
                        </div>
                        <div class="form-group">
                            <strong>Personal:</strong>
                            {{ $requerimiento->Personal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
