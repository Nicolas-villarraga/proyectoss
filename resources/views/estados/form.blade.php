
<h2>{{$modo}} Estado</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for=nombreestado">Nombre</label>
<input type="text" name="nombreestado" value="{{ isset($estado->nombreestado)?$estado->nombreestado:old('estado')}}" id="nombreestado">
<br>
<input class="btn btn-outline-primary" type="submit" value="{{$modo}}">

<a class="btn btn-outline-primary" href="{{url('estados/')}}">Volver</a>