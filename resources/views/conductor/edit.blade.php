<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
</head>

<div id="nav-estilo" style="height:70px;">
    <h3 id="titulos-edit">Editar conductor</h3>
</div>
<div class="modal-body1">
      <form action="/conductors/{{$conductor->id}}"method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="formu1" style="margin-left:6em">
          <div class="mb-3" id="formu1">
            <label for="" style="margin-left:7px">Nombre</label>
              <input id="nombre" name="nombre" type="string" placeholder="Nombre" class="form-control" tabindex="1" required="true" value="{{$conductor->nombre}}">
          </div>
          <div class="mb-3" id="formu1">
            <label for=""  style="margin-left:7px">Apellido</label>
              <input id="apellido" name="apellido" type="string" placeholder="Apellido" class="form-control" tabindex="2" required="true" value="{{$conductor->apellido}}">
          </div>
          <div class="mb-3" id="formu1">
            <label for="" style="margin-left:7px">Teléfono</label>
            <input id="telefono" name="telefono" type="integer" placeholder="123456789" class="form-control" tabindex="3" required="true"value="{{$conductor->telefono}}">
          </div>
          <div class="mb-3" id="formu1">
            <label for="" style="margin-left:7px">Dirección</label>
            <input id="direccion" name="direccion" type="string" placeholder="cra00 #00-98" class="form-control" tabindex="3" required="true" value="{{$conductor->direccion}}">
          </div>
        </div>
        <div class="formu22" style="margin-left:28em">
            <div class="mb-3" id="formu1">
              <label for="" style="margin-left:7px">N° pase</label>
                <input id="nomeropase" name="nomeropase" type="integer" placeholder="1234" class="form-control" tabindex="4" required="true" value="{{$conductor->nomeropase}}">
              </div>
              <div class="mb-3" id="formu1">
                <label for="" style="margin-left:7px">Pase</label>
                <input id="pase" name="pase" type="text" class="form-control" tabindex="5" required="true" value="{{$conductor->pase}}">
              </div>
              <div class="mb-3" id="formu2">
                <label for="" style="margin-left:7px">Cédula</label>
                <input id="cedula" name="cedula" type="text" class="form-control" tabindex="6" required="true" value="{{$conductor->cedula}}">
              </div>
              <div class="mb-3" id="formu2">
                <label for="" style="margin-left:7px">Hoja de vida</label>
                <input id="hv" name="hv" type="text" class="form-control" class="form-control is-valid" tabindex="7" required="true" value="{{$conductor->hv}}">
              </div>
            </div>
            <div>
              <button type="submit" tabindex="9" class="botoncrear" style="margin-left:12em">Editar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>