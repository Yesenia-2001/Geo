<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registrar</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
</head>
  <body>
    <div class="containerlogin" style="margin-top:-px">
    @yield('content')
      <form action="/register" method="POST" style="margin-top:-20px">
          @csrf
          <img id="logocarlogin" src="img/logocar.jpg">
          <h4 class="mt-3">Regístrate</h4>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="username" aria-describedby="emailHelp" required="true">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required="true">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" required="true">
        </div>
        <div class="mb-3">
          <label class="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
          <input type="password" class="form-control" name="password_confirmation" required="true">
        </div>
        <div class="mb-3">
          <a href="/login">Iniciar sesión</a>
        </div>
        <button type="submit" class="btn btn-primary" value="registrarse">Registrar</button>
      </form>
    </div>
  </body>
</html>