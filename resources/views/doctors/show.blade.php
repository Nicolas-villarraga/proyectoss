<h2>Listado de Doctores</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row pt-4 pl-4">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr class="form-control">
                    <td>Nombre:</td>
                    <td>{{$doctor->nombredoctor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Hora</td>
                    <td>{{$doctor->apellidodoctor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Especialidad</td>
                    <td>{{$doctor->Especialidad->nombreespecialidad}}</td>
                </tr>
                <tr class="form-control">
                    <td>Documento:</td>
                    <td>{{$doctor->documentodoctor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Correo</td>
                    <td>{{$doctor->correodoctor}}</td>
                </tr>
                <tr class="form-control">
                    <td>Contraseña:</td>
                    <td>{{$doctor->contraseña}}</td>
                </tr>
                <tr class="form-control">
                    <td>Genero:</td>
                    <td>{{$doctor->genero->nombregenero}}</td>
                </tr>
                
                <tr class="form-control">
                    <td>Rol:</td>
                    <td>{{$doctor->Rol->nombrerol}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/doctors/">volver</a>
        </div>
    </div>


</div>
@endsection
