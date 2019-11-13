<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
  </head>
  <body>
      <header>

          <div class="logo">
            <a href="home.php"><h3>happy</h3></a>
          </div>
    
          <!--header en mobile-->
    
          <div class="hamburguesa">
              <i class="fas fa-bars"></i>
    
          </div>
    
          <div class="login-compras">
    
            <div class="usuario">
                <i class="fas fa-user"></i>
    
              </div>
    
              <!--header en escritorio-->
    
              <div class="login-escritorio">
                <ul>
                   <li><a class ="link" href="login.html">Login</a></li>
                   <li><a class= "link"href="registrate.html">Registrarse</a></li>
                </ul>
              </div>
    
              <div class="carrito">
                <i class="fas fa-shopping-cart">
                  <a href="carrito.html"></a>
                </i>
    
              </div>
    
            </header>

  <div class="formulario-ingreso">
    <form class="formulario-ingreso" action="index.html" method="post">
      <h1>Ingresá</h1>
      <div class="formulario">
      <label for="usuario">
        <p>Usuario:</p>
        <input type="text" name="Usuario" value="" id="password" placeholder="Complete el campo">
      </label>
      <br>
      <br>
      <label for="contraseña">
        <p>Contraseña:</p>
        <input type="password" name="password" value="" id="password" placeholder="Complete el campo">
      </label>
      <br>
      <br>
      <p>
        <button type="submit" name="submit">Enviar</button>
      </p>

      <div class= "texto-nuevo">
        <p>¿Eres nuevo? 
          <br>
          <a href="registrate.php">Registrate</a></p>
      </div>

      </div>
    </form>

    <footer class="pie
    ">
    <div class="pie-pagina">
            <a href="faq.php">Preguntas frecuentes</a>
          </div>
          <div class="contacto">
            <p><a href="contacto.php">Contacto</a></p>
          </div>
        </div>
    </footer>
  </div>
  </body>
</html>

