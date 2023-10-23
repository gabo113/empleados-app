
<label for="Nombre">Nombre</label>
 <input type="text" name="Nombre" value="{{ $empleado->Nombre }}" id="Nombre">
 <br>
 <label for="PrimerApellido">Primer Apellido</label>
 <input type="text"name="PrimerApellido" value="{{ $empleado->PrimerApellido }}" id="PrimerApellido">
 <br>
 <label for="SegundoApellido">Segundo Apellido</label>
 <input type="text"name="SegundoApellido" value="{{ $empleado->SegundoApellido }}" id="SegundoApellido">
 <br>
 <label for="Email">Email</label>
 <input type="text"name="Email" value="{{ $empleado->Email }}" id="Email">
 <br>
 <label for="Foto">Foto</label>
 {{ $empleado->Foto }}
 <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="">
 <input type="file"name="Foto" value="" id="Foto">
 <br>
 
 <input type="submit" value="Guardar Datos">
 <br>