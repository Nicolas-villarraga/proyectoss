
<h2>formulario de edicion
</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/detalles/'.$detalles->id)}}" method="post">
@csrf

@method('PATCH')

@include('detalles.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection
