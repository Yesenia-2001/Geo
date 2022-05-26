<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Información empresa</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
</head>

<div id="nav-estilo">
    <h3 id="titulos-show">Información de la empresa</h3>
</div>
<div id="table-index">
<table class="table mt-4">

    <thead>
        <tr>
            <th scope= "col">Nombre</th>
            <th scope= "col">Dirección</th>
            <th scope= "col">Teléfono de contacto</th>
            <th scope= "col">Logo</th>
            <th scope= "col">Correo electrónico</th>
            <th scope= "col">Kit</th>
            <th scope= "col">Persona de contacto</th>
            <th scope= "col">Contraseña</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$empresa->nombrempresa}}</td>
            <td>{{$empresa->direccion}}</td>
            <td>{{$empresa->telefonocontacto}}</td>
            <td>{{$empresa->logo}}</td>
            <td>{{$empresa->correo}}</td>
            <td>{{$empresa->kit}}</td>
            <td>{{$empresa->personacontacto}}</td>
            <td>{{$empresa->contraseña}}</td>
        </tr>


    </tbody>




</table>
<a href="/empresas"  class=" btn btn-info" style="margin-left:20px">Volver</a>
</div>
