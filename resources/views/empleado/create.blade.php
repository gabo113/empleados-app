Formulario de creacion de lista de empleados.


<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
<label for="Nombre">Nombre</label>
 <input type="text" name="Nombre" id="Nombre">
 <br>
 <label for="PrimerApellido">Primer Apellido</label>
 <input type="text"name="PrimerApellido" id="PrimerApellido">
 <br>
 <label for="SegundoApellido">Segundo Apellido</label>
 <input type="text"name="SegundoApellido" id="SegundoApellido">
 <br>
 <label for="Email">Email</label>
 <input type="text"name="Email" id="Email">
 <br>
 <label for="Foto">Foto</label>
 <input type="file"name="Foto" id="Foto">
 <br>
 
 <input type="submit" value="Guardar Datos">
 <br>
</form>