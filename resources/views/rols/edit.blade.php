
<h2>formulario de edicion
</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/rols/'.$rol->id)}}" method="post">
@csrf

@method('PATCH')

@include('rols.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

