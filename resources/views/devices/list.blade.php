@extends('layouts.app')
@section('content')
	<section class="container">
	    <div class="row justify-content-center">
	    	<article class="col-md-12">
	            {!! Form::open(['route' => 'device/show', 'method' => 'post', 'novalidate', 'class' => 'form-inline'])!!}

	                <div class="form-group row">
	                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre del dispositivo:</label>

	                    <div class="col-md-6">
	                        <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
	                    </div>
	                </div>

	                <div class="form-group row">
	                	<button type="submit" class="btn btn-secondary">Buscar</button>
	                	<a href="{{ route('device.index') }}" class="btn btn-primary">Mostrar todo</a>
	                	<a href="{{ route('device.create') }}" class="btn btn-success">Crear dispositivo</a>
	                </div>
	            {!! Form::close() !!}
	        </article>

	        <article class="col-md-12">
	          	<table class="table table-condesed table-striped table-bordered margin">
			    	<thead>
			    		<tr class="table-active">
			    			<th>Nombre</th>
			    			<th>Tipo de dispositico</th>
			    			<th>CodigoQR</th>
			    			<th>Id estado</th>
			    			<th>Id red</th>
			    			<th>Acción</th>
			    		</tr>
			    	</thead>

			    	<tbody>
			    		@foreach($devices as $device)
			    		<tr>
				    		<td>{{ $device->name }}</td>
				    		<td>{{ $device->type_device }}</td>
				    		<td>{{ $device->codeqr}}</td>
				    		<td>{{ $device->id_state}}</td>
				    		<td>{{ $device->id_red}}</td>
				    		<td>
				    			<a class="btn btn-outline-info" href="{{ route('device/edit',['id' => $device->id]) }}">Actualizar</a>
				    			<a class="btn btn-danger" href="{{ route('device/destroy',['id' => $device->id])}}">Inabilitar</a>
				    		</td>
			    		</tr>
			    		@endforeach
			    	</tbody>
			    </table>
	        </article>
		</div>
	</section>
@endsection
