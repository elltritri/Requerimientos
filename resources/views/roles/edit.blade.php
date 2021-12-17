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
                                {{ __('Editar Rol') }}
                            </span>
                            <div class="float-right">
                            </div>
                        </div>
                    </div>
                @if (session('info'))
                    <div class="alert alert-success">
                        {{ session('info')}}
                    </div>
                @endif
                    <div class="card-body">
                        {!! Form::model($role, ['route'=>['roles.update',$role],'method'=>'put']) !!}
                        @include('roles.form')
                        {!! Form::submit('Actualizar rol', ['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

