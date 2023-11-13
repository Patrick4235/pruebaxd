@extends('layouts.app')

@section('content')
<div class="container">

<H1>Sistema de Biblioteca Especializado</H1>

<div class="alert alert-success alert-dismissible" role="alert">
    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
</div> 


<a href="{{ url('usuario/create') }}" class="btn btn-success"  >Registrar nuevo Prestamo</a>
<br/>
<br/>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Registro</th>
            <th>Documento</th>
            <th>Estado</th>
            <th>Codigo de Libro</th>
            <th>Daño</th>
            <th>Fecha de Prestamo</th>
            <th>Fecha de Devolucion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuario as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->Nombre }}</td>
            <td>{{ $usuario->ApellidoPaterno }}</td>
            <td>{{ $usuario->ApellidoMaterno }}</td>
            <td>{{ $usuario->Registro }}</td>
            <td>{{ $usuario->Documento }}</td>
            <td>{{ $usuario->Estado }}</td>
            <td>{{ $usuario->Libro}}</td>
            <td>{{ $usuario->Damage}}</td>
            <td>{{ $usuario->fechaPrestamo}}</td>
            <td>{{ $usuario->fechaRecepcion}}</td>
            <td>
                <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}" class="btn btn-warning">Editar</a>
                <form action="{{ url('/usuario/'.$usuario->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection