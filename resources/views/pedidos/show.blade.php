<h2>Detalle  de paciente</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Fecha</td>
                    <td>{{$pedido->fechapedido}}</td>
                </tr>
                <tr class="form-control">
                    <td>Hora</td>
                    <td>{{$pedido->horapedido}}</td>
                </tr>
                <tr class="form-control">
                    <td>Total</td>
                    <td>{{$pedido->totalpedido}}</td>
                </tr>
                <tr class="form-control">
                    <td>Observaciones :</td>
                    <td>{{$pedido->observacionespedido}}</td>
                </tr>
                <tr class="form-control">
                    <td>Paciente :</td>
                    <td>{{$pedido->paciente->nombrepaciente}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/pedidos/">volver</a>
        </div>
    </div>


</div>
@endsection
