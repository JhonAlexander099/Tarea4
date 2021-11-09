@extends('layouts.main', ['activePage' => 'reclamos', 'titlePage' => 'Nuevo reclamo'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('reclamos.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-danger">
                                <h4 class="card-title">Reclamo</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
                                        @if($errors->has('name'))
                                            <span class="error text-primary" for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" value="{{ old('email') }}">
                                        @if($errors->has('email'))
                                            <span class="error text-primary" for="input-email">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="motivo" class="col-sm-2 col-form-label">Motivo</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="motivo" placeholder="Ingrese el motivo del reclamo" value="{{ old('motivo') }}">
                                        @if($errors->has('motivo'))
                                            <span class="error text-primary" for="input-motivo">{{ $errors->first('motivo') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-danger">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

