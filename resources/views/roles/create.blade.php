@extends('adminlte::page')
@section('template_title')
    user
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Crear nuevo Rol') }}
                            </span>
                            <div class="float-right">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route'=>'roles.store']) !!}
                        @include('roles.form')
                        {!! Form::submit('crear rol', ['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                 </div>
             </div>
        </div>
    </div>
@endsection

