
<h2>formulario de edicion
</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/citas/'.$cita->id)}}" method="post">
@csrf

@method('PATCH')

@include('citas.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

