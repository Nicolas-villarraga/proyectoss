<h2>Detalle de Cita</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Fecha</td>
                    <td>{{$cita->fecha}}</td>
                </tr>
                <tr class="form-control">
                    <td>Hora</td>
                    <td>{{$cita->hora}}</td>
                </tr>
                <tr class="form-control">
                    <td>Especialidad</td>
                    <td>{{$cita->Especialidad->nombreespecialidad}}</td>
                </tr>
                <tr class="form-control">
                    <td>Doctor</td>
                    <td>{{$cita->doctor->nombredoctor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Paciente</td>
                    <td>{{$cita->paciente->nombrepaciente}}</td>
                </tr>
                <tr class="form-control">
                    <td>Estado</td>
                    <td>{{$cita->estado->nombreestado}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/citas/">volver</a>
        </div>
    </div>


</div>
@endsection
