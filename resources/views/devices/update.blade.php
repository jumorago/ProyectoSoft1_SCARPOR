@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Actualizar dispositivo</div>

                    <div class="card-body">
                        {!! Form::model($device, ['route' => ['device.update', $device->id], 'method' => 'put', 'novalidate'])!!}

                            <div class="form-group row">
                                <label for="ip" class="col-md-4 col-form-label text-md-right">IP del dispositivo:</label>

                                <div class="col-md-6">
                                    <input id="ip" type="text" class="form-control" name="ip" value="{{ $device->ip }}" required autofocus>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre del dispositivo:</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $device->name }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type_device" class="col-md-4 col-form-label text-md-right">Tipo de dispositivo:</label>

                                <div class="col-md-6">
                                    <input id="type_device" type="text" class="form-control" name="type_device" value="{{ $device->type_device }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="codeqr" class="col-md-4 col-form-label text-md-right">CodigoQR:</label>

                                <div class="col-md-6">
                                    <input id="codeqr" type="text" class="form-control" name="codeqr" value="{{ $device->codeqr }}" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="id_state" class="col-md-4 col-form-label text-md-right">Id estado:</label>

                                <div class="col-md-6">
                                    <input id="id_state" type="text" class="form-control" name="id_state" value="{{ $device->id_state }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_red" class="col-md-4 col-form-label text-md-right">Tipo de red:</label>

                                <div class="col-md-6">
                                    <input id="id_red" type="text" class="form-control" name="id_red" value="{{ $device->id_red }}" required>
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
