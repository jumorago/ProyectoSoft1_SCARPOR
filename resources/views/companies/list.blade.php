@extends('layouts.app')
@section('content')
	<section class="container">
	    <div class="row justify-content-center">
	    	<article class="col-md-12">
	            {!! Form::open(['route' => 'company/show', 'method' => 'post', 'novalidate', 'class' => 'form-inline'])!!}

	                <div class="form-group row">
	                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre de la empresa:</label>

	                    <div class="col-md-6">
	                        <input id="name" type="text" class="form-control" name="name" required autofocus>
	                    </div>
	                </div>

	                <div class="form-group row">
	                	<button type="submit" class="btn btn-secondary">Buscar</button>
	                	<a href="{{ route('company.index') }}" class="btn btn-primary">Mostrar todo</a>
	                	<a href="{{ route('company.create') }}" class="btn btn-success">Crear empresa</a>
	                </div>
	            {!! Form::close() !!}
	        </article>

	        <article class="col-md-12">
	          	<table class="table table-condesed table-striped table-bordered margin">
			    	<thead>
			    		<tr class="table-active">
			    			<th>Nombre</th>
			    			<th>Dirección</th>
			    			<th>Telefono</th>
			    			<th>Acción</th>
			    		</tr>
			    	</thead>

			    	<tbody>
			    		@foreach($companies as $company)
			    		<tr>
				    		<td>{{ $company->name }}</td>
				    		<td>{{ $company->address }}</td>
				    		<td>{{ $company->telephone}}</td>
				    		<td>
				    			<a class="btn btn-outline-info" href="{{ route('company/edit',['id' => $company->id]) }}">Actualizar</a>
				    			<a class="btn btn-danger" href="{{ route('company/destroy',['id' => $company->id])}}">Inabilitar</a>
				    		</td>
			    		</tr>
			    		@endforeach
			    	</tbody>
			    </table>
	        </article>
		</div>
	</section>
@endsection
