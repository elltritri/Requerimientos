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
                                {{ __('Asignar un rol') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if (session('info'))
                        <div class="alert alert-success">
                            <strong>{{ session('info') }}</strong>
                        </div>
                    @endif

                    <div class="card-body">
                        <p>Nombre</p>
                        <p class="form-control">{{ $user->name }}</p>   
                        <h2 class="h5">Listado de Roles</h2>
                        {!! Form::model($user, [ 'route'=>['users.update',$user], 'method'=> 'put' ]) !!}
                            @foreach ($roles as $role )
                                <div>
                                    <label>
                                        {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                                        {{ $role->name}}
                                    </label>
                                </div>
                            @endforeach
                            {!! Form::submit('Asignar Rol', ['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
