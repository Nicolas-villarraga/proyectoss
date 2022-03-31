



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
                      
                        <legend class="text-center header pt-5 pl-1"><h3>CONFIRMAR CITA</h3></legend>

                        <div class="form-group">

                        <div class="col-md-8 ml-3">
                          <label for="id_Doctor"><h3>Doctor</h3></label>
                          <select name="id_Doctor" id="id_Doctor">
                          @foreach ($doctores as $doctor)
                            <option value="{{$doctor->id}}">{{$doctor->nombredoctor}}</option>
                          @endforeach
                          </select>
                        </div>

                        <div class="col-md-8 mt-2 ml-3">
                          <label for="fecha"><h3>Fecha</h3></label>
                          <input class="ml-3" type="date" name="fecha" value="{{ isset($cita->fecha)?$cita->fecha:old('fecha')}}"id="fecha" >
                        </div>
                          
                          <div class="col-md-8 mt-2 ml-3">
                          <label for="hora"><h3>Hora</h3></label>
                          <input class="ml-3" type="time" name="hora" value="{{ isset($cita->hora)?$cita->hora:old('hora')}}"id="hora">
                          </div>
                          <div class="col-md-8 mt-2 ml-3">
                            <label for="id_Especialidad"><h3>Especialidad</h3></label>
                              <select name="id_Especialidad" id="id_Especialidad">
                                @foreach ($especialistas as $especialista)
                                    <option class="ml-4" value="{{$especialista->id}}">{{$especialista->nombreespecialidad}}</option>
                                @endforeach
                              </select>
                              </div>

                        <div class="col-md-8 mt-2 ml-3">
                            <label for="id_Paciente"><h3>Paciente</h3></label>
                          <select name="id_Paciente" id="id_Paciente">
                            @foreach ($pacientes as $paciente)
                                <option value="{{$paciente->id}}">{{$paciente->nombrepaciente}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-8 mt-2 ml-3">
                          <label for="id_Estado"><h3>Estado</h3></label>
                          <select name="id_Estado" id="id_Estado">
                            @foreach ($estados as $estado)
                                <option value="{{$estado->id}}">{{$estado->nombreestado}}</option>
                            @endforeach
                          </select>
                        </div>
</div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<input  class="btn btn-outline-primary mr-2" type="submit" value="{{$modo}}"> <a class="btn btn-outline-primary" href="{{url('citas/')}}">Volver</a>