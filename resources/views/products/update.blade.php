@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<div class="card-header">ACTUALIZACIÓN DE PRODUCTOS</div>

				{!! Form::model($products,['route' => ['products.update', $products->id], 'method' => 'put', 'novalidate']) !!}
				<div class="form-group">
						<label>Nombre del Producto:</label>
						<input type="text" name="name" class="form-control" required value="{{ $products->name }}">
					</div>
					<div class="form-group">
						<label>Codigo del Producto:</label>
						<input type="numeric" name="codproduct" class="form-control" required value="{{ $products->codproduct }}">
					</div>
					<div class="form-group">
						<label>Costo:</label>
						<input type="numeric" name="valor" class="form-control" required value="{{ $products->valor }}">
					</div>
					<label>Estado</label>
					<select name="id_states" id="inputid_states" class="form-control" required>
						@foreach ($states as $states)
							<option value="{{ $states['id'] }}">{{ $states['name'] }}</option>
						@endforeach
					</select>
					<label></label>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Actualizar</button>
					</div>
				{!! Form::close() !!}
			</article>
		</div>
	</section>
@endsection