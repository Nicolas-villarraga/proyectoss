<h2>Detalle  de paciente</h2>

@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Nombre :</td>
                    <td>{{$tipodocumento->nombredocumento}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-primary" href="/tipodocumentos/">volver</a>
        </div>
    </div>


</div>
@endsection
