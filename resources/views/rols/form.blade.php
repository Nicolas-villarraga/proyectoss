
<h2>{{$modo}} Rol</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for=nombrerol">Rol</label>
<input type="text" name="nombrerol" value="{{ isset($rol->nombrerol)?$rol->nombrerol:old('nombrerol')}}" id="nombrerol">
<br>
<input class="btn btn-outline-primary" type="submit" value="{{$modo}}">

<a class="btn btn-outline-primary" href="{{url('rols/')}}">Volver</a>