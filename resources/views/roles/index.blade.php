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
                                {{ __('Lista de Roles') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Rol') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if (session('info'))
                        <div class="alert alert-success">
                            {{ session('info')}}
                        </div>
                        
                    @endif

                    

                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Role</th>
                                    <th colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($roles as $role)
                                     <tr>
                                         <td>{{ $role->id }}</td>
                                         <td>{{ $role->name }}</td>
                                         <td>
                                             <a href="{{ route('roles.edit', $role )}}" class="btn btn-sm btn-primary">Editar</a>
                                         </td>
                                         <td>
                                             <form action="{{ route('roles.destroy', $role) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                 <button class="btn btn-sm btn-danger" type="submit">
                                                     Eliminar
                                                 </button>
                                             </form>
                                         </td>
                                     </tr>
                                 @endforeach
                            </tbody>
                        </table>

                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
@endsection

