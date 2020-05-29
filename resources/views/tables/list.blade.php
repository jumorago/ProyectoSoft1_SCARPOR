@extends('layouts.app')
@section('content')
	<section class="container">
	    <div class="row justify-content-center">
	    	<article class="col-md-12">
	            {!! Form::open(['route' => 'tables/show', 'method' => 'post', 'novalidate', 'class' => 'form-inline'])!!}

	                <div class="form-group row">
	                    <label for="numtable" class="col-md-4 col-form-label text-md-right">Numero de mesa:</label>

	                    <div class="col-md-6">
	                        <input id="numtable" type="numeric" class="form-control" name="numtable" required autocomplete="numtable" autofocus>
	                    </div>
	                </div>

	                <div class="form-group row">
	                	<button type="submit" class="btn btn-secondary">Buscar</button>
	                	<a href="{{ route('tables.index') }}" class="btn btn-primary">Mostrar todo</a>
	                	<a href="{{ route('tables.create') }}" class="btn btn-success">Crear mesa</a>
	                </div>
	            {!! Form::close() !!}
	        </article>

	        <article class="col-md-12">
	          	<table class="table table-condesed table-striped table-bordered margin">
			    	<thead>
			    		<tr class="table-active">
			    			<th>Numero de mesa</th>
			    			<th>Estado</th>
			    		</tr>
			    	</thead>

			    	<tbody>
			    		@foreach($tables as $tables)
			    		<tr>
				    		<td>{{ $tables->numtable }}</td>
				    		<td>{{ $tables->id_states}}</td>
				    		<td>
				    			<a class="btn btn-outline-info" href="{{ route('tables/edit',['id' => $tables->id]) }}">Actualizar</a>
				    			<a class="btn btn-danger" href="{{ route('tables/destroy',['id' => $tables->id])}}">Inabilitar</a>
				    		</td>
			    		</tr>
			    		@endforeach
			    	</tbody>
			    </table>
	        </article>
		</div>
	</section>
@endsection
