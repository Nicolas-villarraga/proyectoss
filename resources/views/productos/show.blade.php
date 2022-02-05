

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Nombre</td>
                    <td>{{$producto->nombreproducto}}</td>
                </tr>
                <tr class="form-control">
                    <td>Descripcion</td>
                    <td>{{$producto->descripcionproducto}}</td>
                </tr>
                <tr class="form-control">
                    <td>Precio compra</td>
                    <td>{{$producto->preciocompra}}</td>
                </tr>
                <tr class="form-control">
                    <td>Precio venta</td>
                    <td>{{$producto->precioventa}}</td>
                </tr>
                <tr class="form-control">
                    <td>Cantidad</td>
                    <td>{{$producto->cantidadproducto}}</td>
                </tr>
                <tr class="form-control">
                    <td>Marca</td>
                    <td>{{$producto->proveedor->marcaproveedor}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/productos/">volver</a>
        </div>
    </div>


</div>
@endsection
