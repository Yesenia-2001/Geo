<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
  </head>
  <div id="nav-estilo" style="height:70px;">
    <h3 id="titulos-edit">Editar empresa</h3>
</div>

<div class="modal-body1">
  <form action="/empresas/{{$empresa->id}}"method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="formu1">
      <div class="mb-3" id="formu1">
        <label for="" style="margin-left:7px">Nombre Empresa</label>
        <input id="nombrempresa" name="nombrempresa" type="string" placeholder="Nombre" class="form-control" tabindex="1" required="true" value="{{$empresa->nombrempresa}}">
      </div>
        <div class="mb-3" id="formu1">
        <label for="" style="margin-left:7px">Dirección</label>
        <input id="direccion" name="direccion" type="char" placeholder="Cra 0# 00-00" class="form-control" tabindex="2" required="true" value="{{$empresa->direccion}}">
      </div>      
        <div class="mb-3" id="formu1">
        <label for="" style="margin-left:7px">Teléfono de contácto</label>
        <input id="telefonocontacto" name="telefonocontacto" type="integer" placeholder="123456789" class="form-control" tabindex="3" required="true" value="{{$empresa->telefonocontacto}}">
      </div>
        <div class="mb-3" id="formu1">
        <label for="" style="margin-left:7px">Logo</label>
        <input id="logo" name="logo" type="text" placeholder="123456789" class="form-control" tabindex="3" required="true" value="{{$empresa->logo}}">
      </div>
    </div>
    <div class="formu22">
      <div class="mb-3" id="formu1">
        <label for="" style="margin-left:7px">Correo electrónico</label>
        <input id="correo" name="correo" type="char" placeholder="Email" class="form-control" tabindex="4" required="true" pattern="[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+" value="{{$empresa->correo}}">
      </div>
      <div class="mb-3" id="formu1">
        <label for="" style="margin-left:7px">Kit</label>
        <input id="kit" name="kit" type="char" placeholder="Kit" class="form-control" tabindex="5" required="true" value="{{$empresa->kit}}">
      </div>
      <div class="mb-3" id="formu2">
        <label for="" style="margin-left:7px">Persona de contacto</label>
        <input id="personacontacto" name="personacontacto" type="string" placeholder="Nombre" class="form-control" tabindex="6" required="true" value="{{$empresa->personacontacto}}">
      </div>
      <div class="mb-3" id="formu2">
        <label for="" style="margin-left:7px">Contraseña</label>
        <input id="contraseña" name="contraseña" type="password" placeholder="****" class="form-control" class="form-control is-valid" tabindex="7" required="true" value="{{$empresa->contraseña}}">
      </div>
    </div>
    <div>
      <center><button type="submit" tabindex="9" class="botoncrear" style="">Editar</button></center>
    </div>
  </form>
</div>