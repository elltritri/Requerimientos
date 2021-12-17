@extends('adminlte::page')

@section('template_title')
    Requerimiento
@endsection

@section('content')
    <div class="container-fluid">
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
                                        @if ($sectores->id=1)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                {{-- <td>{{ $requerimiento->Area }}</td> --}}
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
                                        
                                        @elseif ($sectores->id=2)
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
                                        
                                        @elseif ($sectores->id=3)
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
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $requerimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
