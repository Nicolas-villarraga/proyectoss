
<h2>{{$modo}} Usuario</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for="name">nombre</label>
<input type="name" name="name" value="{{ isset($usuario->name)?$usuario->name:old('name')}}"id="name">
<br>
<label for="email">Correo</label>
<input type="email" name="email" value="{{ isset($usuario->email)?$usuario->email:old('email')}}"id="email">
<br>
<label for="password">Hora</label>
<input type="password" name="password" value="{{ isset($usuario->password)?$usuario->password:old('password')}}"id="password">
<br>
<input  class="btn btn-outline-primary" type="submit" value="{{$modo}}">

<a class="btn btn-outline-primary" href="{{url('usuarios/')}}">Volver</a>