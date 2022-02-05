<h2>Detalle  de paciente</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Fecha :</td>
                    <td>{{$proceso->fechaproceso}}</td>
                </tr>
                <tr class="form-control">
                    <td>Observaciones :</td>
                    <td>{{$proceso->observacionesdeproceso}}</td>
                </tr>
                <tr class="form-control">
                    <td>Doctor :</td>
                    <td>{{$proceso->doctor->nombredoctor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Historia :</td>
                    <td>{{$proceso->historia->id}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/procesos/">volver</a>
        </div>
    </div>


</div>
@endsection
