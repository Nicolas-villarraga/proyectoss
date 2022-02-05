@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/usuarios/'.$usuarios->id)}}" method="post">
@csrf

@method('PATCH')

@include('users.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

