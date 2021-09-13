
<h2>formulacion de creacion</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/tipodocumentos')}}" method="post" enctype="multipart/form-data">
@csrf
    
@include('tipodocumentos.form',['modo'=>'Confirmar']);
</form>
</div>    
@endsection