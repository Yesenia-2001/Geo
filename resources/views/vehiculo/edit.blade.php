<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
  </head>

<div id="nav-estilo" style="height:70px;">
    <h3 id="titulos-edit">Editar vehículo</h3>
</div>

  <div class="modal-body1">
    <form action="/vehiculos/{{$vehiculo->id}}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="formu1">
        <div class="mb-3" id="formu1">
          <label for="" style="margin-left:7px">Modelo</label>
          <input id="modelo" name="modelo" type="text" placeholder="Nombre" class="form-control" value="{{$vehiculo->modelo}}" required="true">
        </div>
        <div class="mb-3" id="formu1">
          <label for="" style="margin-left:7px">Matrícula</label>
          <input id="matricula" name="matricula" type="varchar" placeholder="XYZ-123" class="form-control" value="{{$vehiculo->matricula}}" required="true">
        </div>      
        <div class="mb-3" id="formu1">
          <label for="">Nombre conductor</label>
          <input id="nombreconduc" name="nombreconduc" type="text" placeholder="Nombre" class="form-control" value="{{$vehiculo->nombreconduc}}" required="true">
        </div>
        <div class="mb-3" id="formu1">
          <label for="" style="margin-left:7px">Año</label>
          <input id="año" name="año" type="integer" placeholder="Nombre" class="form-control" value="{{$vehiculo->año}}" required="true">
        </div>
        <div class="mb-3" id="formu1">
         <label for="" style="margin-left:7px">Técnico mecánica</label>
         <input id="tecnomecanica" name="tecnomecanica" type="text" placeholder="Placa" class="form-control" value="{{$vehiculo->tecnomecanica}}" required="true">
       </div>
      <div>
      <div class="formu2">
        <div class="mb-3" id="formu2">
          <label for="" style="margin-left:7px">SOAT</label>
          <input id="soat" name="soat" placeholder="1234567890"type="text" class="form-control" value="{{$vehiculo->soat}}" required="true">
        </div>
        <div class="mb-3" id="formu2">
          <label for="" style="margin-left:7px">Tarjeta de propiedad</label>
          <input id="tarjetapropiedad" name="tarjetapropiedad" type="text" class="form-control" value="{{$vehiculo->tarjetapropiedad}}" required="true">
        </div>
        <div class="mb-3" id="formu1">
           <label for="" style="margin-left:7px">Placa</label>
           <input id="placa" name="placa" type="varchar" placeholder="Placa" class="form-control" value="{{$vehiculo->placa}}" required="true">
         </div>
         <div class="mb-3" id="formu2">
           <label for="" style="margin-left:7px">Documento conductor</label>
           <input id="documentoconduc" name="documentoconduc" placeholder="1234567890"type="integer" class="form-control" value="{{$vehiculo->documentoconduc}}" required="true">
         </div>
         <div class="mb-3" id="formu2">
           <label for="" style="margin-left:7px">Fecha de vencimiento</label>
           <input id="fechavencimiento" name="fechavencimiento" type="date" class="form-control" value="{{$vehiculo->fechavencimiento}}" required="true">
          </div>
        </div>
          <div>
            <button type="submit"  tabindex="9" class="botoncrear" style="margin-left:8.5em">Editar</button>
          </div>
       </div>
      </div>
    </form> 
  </div>
