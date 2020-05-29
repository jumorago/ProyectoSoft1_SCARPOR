@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Actualizar Empresas</div>

                    <div class="card-body">
                        {!! Form::model($company, ['route' => ['company.update', $company->id], 'method' => 'put', 'novalidate'])!!}
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre del dispositivo:</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $company->name }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Direción:</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" value="{{ $company->address }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telephone" class="col-md-4 col-form-label text-md-right">Telefono:</label>

                                <div class="col-md-6">
                                    <input id="telephone" type="text" class="form-control" name="telephone" value="{{ $company->telephone }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
