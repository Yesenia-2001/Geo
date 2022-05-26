<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Información conductor</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
</head>

<div id="nav-estilo">
    <h3 id="titulos-show">Información del conductor</h3>
</div>

<div id="table-index">
    <table class="table mt-4" >

        <thead>
            <tr>
                <th scope= "col">Nombre</th>
                <th scope= "col">Apellido</th>
                <th scope= "col">Teléfono</th>
                <th scope= "col">Dirección</th>
                <th scope= "col">N° pase</th>
                <th scope= "col">Pase</th>
                <th scope= "col">Cedula</th>
                <th scope= "col">Hoja de vida</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$conductor->nombre}}</td>
                <td>{{$conductor->apellido}}</td>
                <td>{{$conductor->telefono}}</td>
                <td>{{$conductor->direccion}}</td>
                <td>{{$conductor->nomeropase}}</td>
                <td>{{$conductor->pase}}</td>
                <td>{{$conductor->cedula}}</td>
                <td>{{$conductor->hv}}</td>
            </tr>

        </tbody>
    </table>
    <a href="/conductors"  class=" btn btn-info" style="margin-left:20px">Volver</a>
</div>