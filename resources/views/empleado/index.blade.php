@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('Mensaje'))
{{ Session::get('Mensaje') }}
@endif

<a href="{{ url('empleado/create') }}" class= "btn btn-success" >Registrar nuevo empleado</a>
<br/>
<br/>
<table class="table">
    <thead class="table">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
           <td>{{ $empleado->id }}</td>


           <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
           </td>


           <td>{{ $empleado->Nombre }}</td>
           <td>{{ $empleado->PrimerApellido }}</td>
           <td>{{ $empleado->SegundoApellido }}</td>
           <td>{{ $empleado->Email }}</td>
           <td> 
            
           <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">
            
           
           Editar</a>
           
            | 
           <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return comfirm('¿Deseas Elimienarlo?')" value="Borrar">

           </form>
        
        </td>   
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection