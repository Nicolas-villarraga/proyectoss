<h2>Detalle de Cita</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>{{$usuarios->name}}</td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td>{{$usuarios->email}}</td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td>{{$usuarios->password}}</td>
                </tr>

            </table>
            <a class="btn btn-outline-primary" href="/usuarios/">volver</a>
        </div>
    </div>


</div>
@endsection
