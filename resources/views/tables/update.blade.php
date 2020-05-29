@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<div class="card-header">ACTUALIZACIÓN DE MESAS</div>

				{!! Form::model($tables,['route' => ['tables.update', $tables->id], 'method' => 'put', 'novalidate']) !!}
					<div class="form-group"> 
						<label>Numero de mesa</label>
						<input type="numeric" name="numtable" class="form-control" required value="{{ $tables->numtable }}">
					</div>
					<label>Estado</label>
					<select name="id_states" id="inputid_states" class="form-control" required>
						@foreach ($states as $states)
							<option value="{{ $states['id'] }}">{{ $states['name'] }}</option>
						@endforeach
					</select>
					<label></label>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Registrar</button>
					</div>
				{!! Form::close() !!}
			</article>
		</div>
	</section>
@endsection