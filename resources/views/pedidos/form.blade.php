
<h2>{{$modo}} Pedido</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif
<label for="fechapedido">fecha</label>
<input type="date" name="fechapedido" value="{{ isset($pedido->fechapedido)?$pedido->fechapedido:old('fechapedido')}}" id="fechapedido">
<br>
<label for="horapedido">hora</label>
<input type="time" name="horapedido" value="{{ isset($pedido->horapedido)?$pedido->horapedido:old('horapedido')}}" id="horapedido">
<br>
<label for="razonsocialpedido">Razon social</label>
<input type="text" name="razonsocialpedido" value="{{ isset($pedido->razonsocialpedido)?$pedido->razonsocialpedido:old('razonsocialpedido')}}" id="razonsocialpedido">
<br>
<label for="detallepedido">Detalle Pedido</label>
<input type="longtext" name="detallepedido" value="{{ isset($pedido->detallepedido)?$pedido->detallepedido:old('detallepedido')}}" id="detallepedido">
<br>
<label for="totalpedido">Total</label>
<input type="number" name="totalpedido" value="{{ isset($pedido->totalpedido)?$pedido->totalpedido:old('total')}}" id="totalpedido">
<br>
<label for="observacionespedido">Observaciones</label>
<input type="longtext" name="observacionespedido" value="{{ isset($pedido->observacionespedido)?$pedido->observacionespedido:old('observacionespedido')}}" id="observacionespedido">
<br>
<label for="id_Paciente">Paciente</label>
<select name="id_Paciente" id="id_Paciente">
  @foreach ($pacientes as $paciente)
      <option value="{{$paciente->id}}">{{$paciente->nombrepaciente}}</option>
  @endforeach
</select>
<br>
<input class="btn btn-outline-primary" type="submit" value="{{$modo}}">

<a class="btn btn-outline-primary" href="{{url('pedidos/')}}">Volver</a>