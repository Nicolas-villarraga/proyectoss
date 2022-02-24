
<h2>Pedidos</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/pedidos')}}" method="post" enctype="multipart/form-data">
@csrf
    
@include('pedidos.form',['modo'=>'Confirmar'])
</form>
</div>    
@endsection