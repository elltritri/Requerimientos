@extends('adminlte::page')


@section('template_title')
    {{ $dotacione->name ?? 'Show Dotacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dotacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dotaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreyapellido:</strong>
                            {{ $dotacione->nombreyapellido }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $dotacione->area }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
