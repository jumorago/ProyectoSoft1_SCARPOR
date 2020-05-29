@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row justify-content-center">


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
                                <a class="btn btn-outline-info" href="{{ route('home',['id' => $products->id]) }}">Agregar al pedido</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>
        </div>
    </section>
@endsection
