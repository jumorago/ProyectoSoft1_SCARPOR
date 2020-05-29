@extends('layouts.app')
@section('content')
	<section class="container">
	    <div class="row justify-content-center">
	    	<article class="col-md-12">
	            {!! Form::open(['route' => 'products/show', 'method' => 'post', 'novalidate', 'class' => 'form-inline'])!!}

	                <div class="form-group row">
	                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre de producto:</label>

	                    <div class="col-md-6">
	                        <input id="name" type="numeric" class="form-control" name="name" required autocomplete="name" autofocus>
	                    </div>
	                </div>

	                <div class="form-group row">
	                	<button type="submit" class="btn btn-secondary">Buscar</button>
	                	<a href="{{ route('products.index') }}" class="btn btn-primary">Mostrar todo</a>
	                	<a href="{{ route('products.create') }}" class="btn btn-success">Crear producto</a>
	                </div>
	            {!! Form::close() !!}
	        </article>

	        <article class="col-md-12">
	          	<table class="table table-condesed table-striped table-bordered margin">
			    	<thead>
			    		<tr class="table-active">
			    			<th>Nombre de producto</th>
			    			<th>Codigo del produto</th>
			    			<th>Costo</th>
			    			<th>Estado</th>
			    		</tr>
			    	</thead>

			    	<tbody>
			    		@foreach($products as $products)
			    		<tr>
				    		<td>{{ $products->name }}</td>
				    		<td>{{ $products->codproduct }}</td>
				    		<td>{{ $products->valor }}</td>
				    		<td>{{ $products->id_states}}</td>
				    		<td>
				    			<a class="btn btn-outline-info" href="{{ route('products/edit',['id' => $products->id]) }}">Actualizar</a>
				    			<a class="btn btn-danger" href="{{ route('products/destroy',['id' => $products->id])}}">Inabilitar</a>
				    		</td>
			    		</tr>
			    		@endforeach
			    	</tbody>
			    </table>
	        </article>
		</div>
	</section>
@endsection
