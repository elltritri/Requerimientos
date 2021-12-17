@extends('adminlte::page')

@section('template_title')
    Sectore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
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
                {!! $sectores->links() !!}
            </div>
        </div>
    </div>
@endsection
