@extends('adminlte::page')

@section('template_title')
    Create Sectore
@endsection

@section('content')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear un Sector</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sectores.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('sectore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
