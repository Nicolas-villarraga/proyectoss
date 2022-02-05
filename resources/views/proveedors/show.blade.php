<h2>Detalle  de paciente</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Nombre</td>
                    <td>{{$proveedor->nombreproveedor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Nit</td>
                    <td>{{$proveedor->nitproveedor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Direccion</td>
                    <td>{{$proveedor->direccionproveedor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Telefono</td>
                    <td>{{$proveedor->telefonoproveedor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Correo</td>
                    <td>{{$proveedor->correoproveedor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Marca</td>
                    <td>{{$proveedor->marcaproveedor}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/proveedors/">volver</a>
        </div>
    </div>


</div>
@endsection
