
<h2>Proveedores</h2>
@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/proveedors')}}" method="post" enctype="multipart/form-data">
@csrf
    
@include('proveedors.form',['modo'=>'Confirmar']);
</form>
</div>    
@endsection