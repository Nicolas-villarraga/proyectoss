
<h2>Productos
</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/productos/'.$producto->id)}}" method="post">
@csrf

@method('PATCH')

@include('productos.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

