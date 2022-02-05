<h2>Detalle de Historia</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Fecha de Creación :</td>
                    <td>{{$historiaclinica->fechadecreacionhistoria}}</td>
                </tr>
                <tr class="form-control">
                    <td>Descripcion :</td>
                    <td>{{$historiaclinica->descripcionhistoria}}</td>
                </tr>
                <tr class="form-control">
                    <td>Paciente :</td>
                    <td>{{$historiaclinica->paciente->nombrepaciente}}</td>
                </tr>
                <tr class="form-control">
                    <td>Doctor :</td>
                    <td>{{$historiaclinica->doctor->nombredoctor}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/historiaclinicas">volver</a>
            <a class="btn btn-outline-primary"  href="/procesos">
                Procesos
            </a>
        </div>
    </div>


</div>
@endsection
