
<h2>formulacion de creacion</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/pacientes')}}" method="post" enctype="multipart/form-data">
@csrf
    
@include('pacientes.form',['modo'=>'Confirmar']);
</form>
</div>    
@endsection