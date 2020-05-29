@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<div class="card-header">REGISTRO DE MESAS</div>

				{!! Form::open(['route' => 'tables.store', 'method' => 'post', 'novalidate']) !!}
					<div class="form-group">
						<label>Numero de mesa</label>
						<input type="numeric" name="numtable" class="form-control" required>
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