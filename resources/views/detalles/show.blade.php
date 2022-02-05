<h2>Detalle de venta</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Nombre:</td>
                    <td>{{$detalles->producto->nombreproducto}}</td>
                </tr>
                <tr class="form-control">
                    <td>Descripcion:</td>
                    <td>{{$detalles->descripcionproducto}}</td>
                </tr>
                <tr class="form-control">
                    <td>Cantidad:</td>
                    <td>{{$detalles->cantidadproducto}}</td>
                </tr>
                <tr class="form-control">
                    <td>Valor:</td>
                    <td>{{$detalles->valorproducto}}</td>
                </tr>
                <tr class="form-control">
                    <td>Pedido:</td>
                    <td>{{$detalles->pedido->id}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/detalles/">volver</a>
        </div>
    </div>


</div>
@endsection
