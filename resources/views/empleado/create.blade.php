Formulario de creacion de lista de empleados.


<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form')
</form>