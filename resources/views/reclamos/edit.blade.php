@extends('layouts.main', ['activePage' => 'reclamos', 'titlePage' => 'Editar reclamo'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('reclamos.update', $reclamo->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-danger">
                                <h4 class="card-title">Reclamo</h4>
                                <p class="card-category">Editar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" value="{{ $reclamo->name }}" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" value="{{ $reclamo->email }}" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="motivo" class="col-sm-2 col-form-label">Motivo</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="motivo" value="{{ $reclamo->motivo }}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-danger">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


