
<h2>formulario de edicion
</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/usuarios/'.$usuarios->id)}}" method="post">
@csrf

@method('PATCH')

@include('citas.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

