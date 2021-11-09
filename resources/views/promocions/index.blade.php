@extends('layouts.main', ['activePage' => 'promocions', 'titlePage' => 'Promociones'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-danger">
                                    <h4 class="card-title"Promociones></h4>
                                    <p class="card-category">Promociones Registradas</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('promocions.create') }}" class="btn btn-sm btn-facebook">Añadir Promocion</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-danger">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Created_at</th>
                                            <th class="text-right">Acciones</th>
                                            </thead>
                                            <tdody>
                                                @foreach($promocions as $promocion)
                                                    <tr>
                                                        <td>{{$promocion->id}}</td>
                                                        <td>{{$promocion->name}}</td>
                                                        <td>{{$promocion->motivo}}</td>
                                                        <td>{{$promocion->created_at}}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('promocions.show', $promocion->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                            <a href="{{ route('promocions.edit', $promocion->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            <form action="{{ route('promocions.delete', $promocion->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Seguro?')">
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
                                    {{ $promocions->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


