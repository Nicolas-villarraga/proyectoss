
<h2>formulario de edicion
</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/procesos/'.$procesos->id)}}" method="post">
@csrf

@method('PATCH')

@include('procesos.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

