<h2>Detalle de Genero</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Genero:</td>
                    <td>{{$genero->nombregenero}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/generos">volver</a>
        </div>
    </div>


</div>
@endsection
