@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<div class="container pt-5">



<div class="alert alert-success alert-dismissible" role="alert">
    @if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
    @endif
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<a class="btn btn-outline-primary" href="{{url('generos/create')}}">Nuevo Genero</a>

<table  id="genero"   class="table table-striped table-bordered" style="width:100%">
    <thead class=" bg-primary text-white">
        <tr>
            <th>ID</th>
            <th>Nombre Genero</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($generos as $genero)
        <tr>
            <td>{{$genero->id}}</td>
            <td>{{$genero->nombregenero}}</td>
            <td>
                
                <a class="btn btn-outline-primary" href="{{url('/generos/'.$genero->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/generos/'.$genero->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-outline-primary" type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                <a class="btn btn-outline-primary" href="{{url('/generos/'.$genero->id)}}">Detalle</a>



            </td>
        </tr>
        @endforeach
    </tbody>
    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#genero').DataTable();
        } );
    </script>
    @endsection
</table>
</div>
@endsection
