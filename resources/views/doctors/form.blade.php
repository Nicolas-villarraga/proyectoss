@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>

@endif
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                      
                        <legend class="text-center header pt-5 pl-1"><h3>Doctores</h3></legend>

                        <div class="form-group">

                        <div class="col-md-8 ml-3">
                          <label for="nombredoctor"><h3>Nombres</h3></label>
                          <input type="text" name="nombredoctor" value="{{ isset($doctor->nombredoctor)?$doctor->nombredoctor:old('nombre')}}" id="nombredoctor">
                        </div>
                        <div class="col-md-8 ml-3">
                          <label for="apellidodoctor"><h3>Apellidos</h3></label>
                          <input type="text" name="apellidodoctor" value="{{ isset($doctor->apellidodoctor)?$doctor->apellidodoctor:old('apellido')}}" id="apellidodoctor">
                        </div>
                        <div class="col-md-8 ml-3">
                          <label for="id_Especialidad"><h3>Especialidad</h3></label>
                          <select name="id_Especialidad" id="id_Especialidad">
                            @foreach ($especialidades as $especialidad)
                                <option value="{{$especialidad->id}}">{{$especialidad->nombreespecialidad}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-8 ml-3">
                          <label for="id_Tipodocumento"><h3>Tipo de documento</h3></label>
                          <select name="id_Tipodocumento" id="id_Tipodocumento">
                            @foreach ($tipodocumentos as $tipodocumento)
                                <option value="{{$tipodocumento->id}}">{{$tipodocumento->nombredocumento}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-8 ml-3">
                          <label for="documentodoctor"><h3>Documento</h3></label>
                          <input type="number" name="documentodoctor" value="{{ isset($doctor->documentodoctor)?$doctor->documentodoctor:old('documentodoctor')}}" id="documentodoctor">
                        </div>
                        <div class="col-md-8 ml-3">
                          <label for="correodoctor"><h3>Correo</h3></label>
                          <input type="text" name="correodoctor" value="{{ isset($doctor->correodoctor)?$doctor->correodoctor:old('correodoctor')}}" id="correodoctor">
                        </div>
                        <div class="col-md-8 ml-3">
                          <label for="contraseña"><h3>Contraseña</h3></label>
                          <input type="password" name="contraseña" value="{{ isset($doctor->contraseña)?$doctor->contraseña:old('contraseña')}}" id="contraseña">
                        </div>
                        <div class="col-md-8 ml-3">
                          <label for="id_Genero"><h3>Genero</h3></label>
                          <select name="id_Genero" id="id_Genero">
                            @foreach ($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nombregenero}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-8 ml-3">
                          <label for="id_rol"><h3>Rol</h3></label>
                          <select name="id_rol" id="id_rol">
                            @foreach ($rols as $rol)
                                <option value="{{$rol->id}}">{{$rol->nombrerol}}</option>
                            @endforeach
                          </select>
                        </div>
                        
<input class="btn btn-outline-primary ml-3" type="submit" value="{{$modo}}"> <a class="btn btn-outline-primary" href="{{url('doctors/')}}">Volver</a>