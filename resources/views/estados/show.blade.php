<h2>Detalle de Cita</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Estado:</td>
                    <td>{{$estado->nombreestado}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/estados/">volver</a>
        </div>
    </div>


</div>
@endsection
