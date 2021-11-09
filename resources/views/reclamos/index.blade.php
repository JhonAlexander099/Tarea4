@extends('layouts.main', ['activePage' => 'reclamos', 'titlePage' => 'Reclamos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-danger">
                                    <h4 class="card-title"Reclamos></h4>
                                    <p class="card-category">Reclamos Registrados</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('reclamos.create') }}" class="btn btn-sm btn-facebook">Añadir Reclamo</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-danger">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Motivo</th>
                                            <th>Created_at</th>
                                            <th class="text-right">Acciones</th>
                                            </thead>
                                            <tdody>
                                                @foreach($reclamos as $reclamo)
                                                    <tr>
                                                        <td>{{$reclamo->id}}</td>
                                                        <td>{{$reclamo->name}}</td>
                                                        <td>{{$reclamo->email}}</td>
                                                        <td>{{$reclamo->motivo}}</td>
                                                        <td>{{$reclamo->created_at}}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('reclamos.show', $reclamo->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                            <a href="{{ route('reclamos.edit', $reclamo->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            <form action="{{ route('reclamos.delete', $reclamo->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Seguro?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tdody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $reclamos->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

