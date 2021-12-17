@extends('adminlte::page')

@section('template_title')
    Dotacione
@endsection

@section('content')
    <div class="container-fluid p-3 border gx-4">
        <div class="card">
            <div class="row">

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Dotacione') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('dotaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Create New') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            
                                            <th>Nombreyapellido</th>
                                            <th>Area</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dotaciones as $dotacione)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $dotacione->nombreyapellido }}</td>
                                                <td>{{ $dotacione->area }}</td>

                                                <td>
                                                    <form action="{{ route('dotaciones.destroy',$dotacione->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('dotaciones.show',$dotacione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('dotaciones.edit',$dotacione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
    
                                <span id="card_title">
                                    {{ __('Sectores') }}
                                </span>
                                @can('sectores.create')
                                     <div class="float-right">
                                        <a href="{{ route('sectores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                            Crear Sector
                                        </a>
                                      </div>
                                @endcan
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>N°</th>
                                            
                                            <th>Sector</th>
    
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sectores as $sectore)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $sectore->sectores }}</td>
    
                                                <td>
                                                    <form action="{{ route('sectores.destroy',$sectore->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('sectores.show',$sectore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('sectores.edit',$sectore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
    
                                <span id="card_title">
                                    {{ __('Requerimiento') }}
                                </span>
    
                                 <div class="float-right">
                                    <a href="{{ route('requerimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                      {{ __('Create New') }}
                                    </a>
                                  </div>
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            <th>Area</th>
                                            <th>Fecha</th>
                                            <th>Tareasolicitada</th>
                                            <th>Observaciones</th>
                                            <th>Estado</th>
                                            <th>Fechaentrega</th>
                                            <th>Personal</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($requerimientos as $requerimiento)
                                            
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $requerimiento->Area }}</td>
                                                    <td>{{ $requerimiento->Fecha }}</td>
                                                    <td>{{ $requerimiento->TareaSolicitada }}</td>
                                                    <td>{{ $requerimiento->Observaciones }}</td>
                                                    <td>{{ $requerimiento->estado }}</td>
                                                    <td>{{ $requerimiento->FechaEntrega }}</td>
                                                    <td>{{ $requerimiento->Personal }}</td>
                                                    <td>
                                                        <form action="{{ route('requerimientos.destroy',$requerimiento->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary " href="{{ route('requerimientos.show',$requerimiento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                            <a class="btn btn-sm btn-success" href="{{ route('requerimientos.edit',$requerimiento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
        </div>
    </div>
@endsection
