<h2>Detalle de Cita</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Nombre</td>
                    <td>{{$usuarios->name}}</td>
                </tr>
                <tr class="form-control">
                    <td>Correo</td>
                    <td>{{$usuarios->email}}</td>
                </tr>
                <tr class="form-control">
                    <td>Contraseña</td>
                    <td>{{$usuarios->password}}</td>
                </tr>

            </table>
            <a class="btn btn-outline-primary" href="/usuarios/">volver</a>
        </div>
    </div>


</div>
@endsection
