<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Información vehículo</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
</head>

<div id="nav-estilo">
    <h3 id="titulos-show">Información del vehículo</h3>
</div>
<div id="table-index">
<table class="table mt-4">

<table class="table mt-4" id="table-show">

  <thead>
    <tr>
      <th scope= "col">Conductor</th>
      <th scope= "col">Documento de Conductor</th>
      <th scope= "col">Modelo</th>
      <th scope= "col">Año</th>
      <th scope= "col">Técnico mecánica</th>
      <th scope= "col">SOAT</th>
      <th scope= "col">Tarjeta de propiedad</th>
      <th scope= "col">Matricula</th>
      <th scope= "col">Placa</th>
      <th scope= "col">Fecha De Vencimiento</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>{{$vehiculo->nombreconduc}}</td>
      <td>{{$vehiculo->documentoconduc}}</td>
      <td>{{$vehiculo->modelo}}</td>
      <td>{{$vehiculo->año}}</td>
      <td>{{$vehiculo->tecnomecanica}}</td>
      <td>{{$vehiculo->soat}}</td>
      <td>{{$vehiculo->tarjetapropiedad}}</td>
      <td>{{$vehiculo->matricula}}</td>
      <td>{{$vehiculo->placa}}</td>
      <td>{{$vehiculo->fechavencimiento}}</td>
    </tr>
  </tbody>
</table>
<a href="/vehiculos"  class=" btn btn-info" style="margin-left:20px">Volver</a>
</div>