<h1>{{$modo}} Empleado.</h1>


<label for="Nombre">Nombre</label>
 <input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
 <br>
 <label for="PrimerApellido">Primer Apellido</label>
 <input type="text"name="PrimerApellido" value="{{ isset($empleado->PrimerApellido)?$empleado->PrimerApellido:'' }}" id="PrimerApellido">
 <br>
 <label for="SegundoApellido">Segundo Apellido</label>
 <input type="text"name="SegundoApellido" value="{{ isset($empleado->SegundoApellido)?$empleado->SegundoApellido:'' }}" id="SegundoApellido">
 <br>
 <label for="Email">Email</label>
 <input type="text"name="Email" value="{{ isset($empleado->Email)?$empleado->Email:'' }}" id="Email">
 <br>
 <label for="Foto">Foto</label>
 @if(isset($empleado->Foto))
 <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
 @endif
 <input type="file"name="Foto" value="" id="Foto">
 <br>
 
 <input type="submit" value="{{$modo}} Datos">

 <a href="{{ url('empleado/') }}">Regresar</a>
 <br>