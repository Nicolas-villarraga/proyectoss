<h2>Detalle  de paciente</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Nombre</td>
                    <td>{{$paciente->nombrepaciente}}</td>
                </tr>
                <tr class="form-control">
                    <td>Apellido</td>
                    <td>{{$paciente->apellidopaciente}}</td>
                </tr>
                <tr class="form-control">
                    <td>Tipo de Documento</td>
                    <td>{{$paciente->tipodocumento->nombredocumento}}</td>
                </tr>
                <tr class="form-control">
                    <td>Documento</td>
                    <td>{{$paciente->documentopaciente}}</td>
                </tr>
                <tr class="form-control">
                    <td>Telefono</td>
                    <td>{{$paciente->telefonopaciente}}</td>
                </tr>
                <tr class="form-control">
                    <td>Acudiente</td>
                    <td>{{$paciente->acudientepaciente}}</td>
                </tr>
                <tr class="form-control">
                    <td>Correo</td>
                    <td>{{$paciente->correopaciente}}</td>
                </tr>
                <tr class="form-control">
                    <td>Contraseña</td>
                    <td>{{$paciente->contraseña}}</td>
                </tr>
                <tr class="form-control">
                    <td>Estado</td>
                    <td>{{$paciente->estado->nombreestado}}</td>
                </tr>
                <tr class="form-control">
                    <td>Genero</td>
                    <td>{{$paciente->genero->nombregenero}}</td>
                </tr>
                <br>
            </table>
            <a class="btn btn-outline-primary" href="/pacientes/">volver</a>
        </div>
    </div>


</div>
@endsection
