@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<div class="card-header">REGISTRO DE PRODUCTOS</div>

				{!! Form::open(['route' => 'products.store', 'method' => 'post', 'novalidate']) !!}
					<div class="form-group">
						<label>Nombre del Producto:</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Codigo del Producto:</label>
						<input type="text" name="codproduct" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Costo:</label>
						<input type="numeric" name="valor" class="form-control" required>
					</div>
					<label></label>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Registrar</button>
					</div>
				{!! Form::close() !!}
			</article>
		</div>
	</section>
@endsection