<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/profile.css">

    <title>Document</title>
  </head>
  <body>
    <div class="contenedor">
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
        </div>

        
        <div class="carrito">
            <i class="fas fa-shopping-cart">
              <a href="carrito.html"></a>
            </i>
          </div>

            <!--header en escritorio-->

        <div class="login-escritorio">
          <ul>
            <li><a class ="link" href="login.php">Login</a></li>
            <li><a class= "link"href="registrate.php">Registrarse</a></li>
          </ul>
        </div>

      </header>

      <main>
        <div class="contenedor-h1">
          <h1>Mi perfil</h1>
        </div>
        <div>
          <div class="contenedor-avatar">
            <img class="avatar" src="imagenes/avatar.png" alt="avatar">
          </div>
        </div>
        <div class="articulos">  
          <section class="seccion-1">
            <p>Nombre:</p>
            <p>Apellido:</p>
            <p>Dirección</p>
            <p>Teléfono</p>
            <p>E-Mail:</p>
          </section>
          <section class="seccion-2">
            <p>John</p>
            <p>Doe</p>
            <p>Av. Corrientes 3500, C.A.B.A</p>
            <p>011 4752-8739</p>
            <p>john_doe@someone.com</p>
          </section>
        </div>





      </main>

      <footer class="pie
      ">
      <div class="pie-pagina">
              <a href="faq.php">Preguntas frecuentes</a>
            </div>
            <div class="contacto">
              <p><a href="contacto.php">Contacto</a></p>
            </div>
        
      </footer>
    </div>
  </body>
</html>
