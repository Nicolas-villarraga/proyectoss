
<h2>Especialidades
</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/especialidads/'.$especialidad->id)}}" method="post">
@csrf

@method('PATCH')

@include('especialidads.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

