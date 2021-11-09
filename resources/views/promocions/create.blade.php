@extends('layouts.main', ['activePage' => 'promocions', 'titlePage' => 'Nueva promocion'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('promocions.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-danger">
                                <h4 class="card-title">Promocion</h4>
                                <p class="card-category">Ingresar datos de promocion</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre de la empresa</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" placeholder="Ingrese nombre de la empresa" value="{{ old('name') }}" autofocus>
                                        @if($errors->has('name'))
                                            <span class="error text-primary" for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion de la promocion</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion" placeholder="Ingrese la descripcion" value="{{ old('descripcion') }}">
                                        @if($errors->has('descripcion'))
                                            <span class="error text-primary" for="input-descripcion">{{ $errors->first('descripcion') }}</span>
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


