@extends('layouts.app-master')

@section('content')
<title>Información</title>

<table class="table mt-4" id="table-index">

    <thead>
        <tr>
            <th scope= "col">Nombre</th>
            <th scope= "col">Apellido</th>
            <th scope= "col">Teléfono</th>
            <th scope= "col">N° pase</th>
            <th scope= "col">Cedula</th>
            <th scope= "col">Dirección</th>
            <th scope= "col">Pase</th>
            <th scope= "col">Hoja de vida</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$conductor->nombre}}</td>
            <td>{{$conductor->apellido}}</td>
            <td>{{$conductor->telefono}}</td>
            <td>{{$conductor->nomeropase}}</td>
            <td>{{$conductor->cedula}}</td>
            <td>{{$conductor->direccion}}</td>
            <td>{{$conductor->pase}}</td>
            <td>{{$conductor->hv}}</td>
        </tr>


    </tbody>




</table>
<a href="/conductors"  class=" btn btn-info">Volver</a>

@endsection