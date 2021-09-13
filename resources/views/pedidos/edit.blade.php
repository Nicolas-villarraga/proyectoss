
<h2>Pedidos
</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/pedidos/'.$pedido->id)}}" method="post">
@csrf

@method('PATCH')

@include('pedidos.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

