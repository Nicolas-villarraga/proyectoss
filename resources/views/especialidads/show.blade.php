<h2>Detalle de Cita</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Especialidad:</td>
                    <td>{{$especialidad->nombreespecialidad}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/especialidads/">volver</a>
        </div>
    </div>


</div>
@endsection
