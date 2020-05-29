@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CARRITO DE CONTRAS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <?php $valor = 0?>
                    @if(session('cart'))

                    	@foreach(session('cart') as $id -> $id -> $list)
                    		<? $valor +- $list['valor'] + $list['quantity']?>

                    		{{ $list['name'] }}
                    		$./{{ $list['valor'] }}
                    		{{ $list['quantity'] }}

                    		${{ $list['valor'] + $list['quantity']}}

                    	@endforeach
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection