<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
  </head>
  <body>
    <div class="containerlogin">
      @yield('content')
      <form action="/login" method="POST">
        @csrf          
        @if ($message = Session::get('Error'))
            <div class="col-20 alert alert-danger alert-dismissable fade show" id="mensajerror">
              {{$message}}
            </div> 
          @endif

        <img id="logocarlogin" src="img/logocar.jpg">
        <h4 class="mt-3">Inicio de sesión</h4>
        <div class="mb-3" id="div-formu">
        
          <label for="exampleInputEmail1" class="form-label" style="margin-top:2em">Nombre o correo electrónico</label>
          <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" required="true">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" required="true">
          <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16" id="eye" onclick="toggle()">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
          </svg>
          </span>
              <script>
                var state= false;
                function toggle(){
                  if(state){
                    document.getElementById("password").seAttribute("type","password");
                    document.getElementById("eye").style.color= '#7a797e';
                    state = false;
                    
                  }
                  else{
                    document.getElementById("password").seAttribute("type","text");
                    document.getElementById("eye").style.color= '#5887ef';
                    state = true;
                  }
                }
              </script>
        </div>
        <div class="mb-3">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" >
          <label class="form-check-label" for="exampleCheck1">Recordar contraseña</label>
        </div>
        <div class="mb-3">
          <a href="/register">Crear cuenta</a>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
        
      </form>
     
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

