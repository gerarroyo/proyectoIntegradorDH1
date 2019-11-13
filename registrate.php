<?php
//VARIABLES DE LOS DATOS QUE LLENA EL USUARIO EN EL FORMULARIO (ESTAN LLAMADOS DENTRO DE LOS VALUES)//
$nombre="";
$apellido="";
$email="";
$password="";
$confirmarPassword="";

//VARIABLES QUE SE USAN PARA TIRAR EL MENSAJE DE "ERROR NO COMPLETASTE EL NOMBRE"//
$completeSuNombre = "";
$completeSuApellido = "";
$completeSuEmail = "";
$noEsUnMail= "";
$completeSuContrasena = "";
$repitaSuContrasena = "";
$contrasenasNoSonIguales="";

// VALIDACION //
if ($_POST) {
  $completeSuNombre = validarNombre();
  $completeSuApellido = validarApellido();
  $completeSuEmail = validarEmail();
  $completeSuContrasena = validarContrasena();

//PONER LOS DATOS DEL USUARIO EN UN ARRAY, Y ESE ARRAY TRANSFORMARLO EN UN JSON//
  $datosDelUsuario=[];
  $hashPassword="";
  $hashPassword=password_hash($_POST['password'],PASSWORD_DEFAULT);
  $datosDelUsuario = [
    'nombre' => $_POST['nombre'],
    'apellido'=>($_POST['apellido']),
    'email'=>($_POST['email']),
    'password'=>$hashPassword
  ];
  $jsonDatosDelUsuario=json_encode($datosDelUsuario);
  file_put_contents('archivosDelUsuario.json',$jsonDatosDelUsuario,FILE_APPEND);

}
function validarNombre(){
  if (strlen($_POST["nombre"])==0){
    $completeSuNombre = "Complete su nombre";
    return $completeSuNombre;

  }
}

function validarApellido(){
  if (strlen($_POST["apellido"])==0){
    $completeSuApellido = "Complete su apellido";
    return $completeSuApellido;
  }
}

function validarEmail() {
if (strlen($_POST["email"])==0) {
  $completeSuEmail= "El campo esta vacio";
  return $completeSuEmail;

}
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
   $noEsUnMail= "El campo no es un email";
   return $noEsUnMail;
  }
}

function validarContrasena() {
if (strlen ($_POST["password"])==0) {
   $completeSuContrasena= "La contraseña esta vacia";
   return $completeSuContrasena;
  }
if (strlen ($_POST["confirmarPassword"])==0) {
   $repitaSuContrasena= "Repita su contraseña";
   return $repitaSuContrasena;
    }
if (($_POST["password"])!==($_POST["confirmarPassword"])) {
   $contrasenasNoSonIguales= "Las contraseñas no son iguales";
   return $contrasenasNoSonIguales;
 }
}

//VARIABLES HECHAS PARA JUNTAR LOS DATOS DEL FORMULARIO, EN UN ARRAY//
$datosDelUsuario=[];
$hashPassword="";





 ?>






<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="css/registrate.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
  </head>

  <body>
          <div class= "encabezado">
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
                      <a href="profile.php"><i class="fas fa-user"></i></a>
                    </div>
                    <!--header en escritorio-->
                    <div class="login-escritorio">
                      <ul>
                        <li><a class ="link" href="login.php">Login</a></li>
                        <li><a class= "link"href="registrate.php">Registrarse</a></li>
                      </ul>
                    </div>
                    <div class="carrito">
                      <i class="fas fa-shopping-cart">
                        <a href="carrito.php"></a>
                      </i>
                    </div>
                  </header>
          </div>

      <main>
        <div class="registro">
          <h1>Registrate!</h1>
        <form class="registro" action="registrate.php" method="post">
            <label for="nombre">
                <p>Nombre:</p>
                <input id="nombre" type="text" name="nombre" value="<?= $nombre  ?>">
                <?= $completeSuNombre ?>
            </label>
          <br>
          <br>
            <label for="apellido">
              <p>Apellido:</p>
              <input id="apellido" type="text" name="apellido" value="<?= $apellido  ?>">
              <?= $completeSuApellido ?>
            </label>
          <br>
          <br>
            <label for="email">
              <p>Email: </p>
              <input type="email" name="email" value="<?= $email  ?>">
              <?= $completeSuEmail ?>
              <?=$noEsUnMail ?>
            </label>
          <br>
          <br>
            <label for="password">
              <p>Contraseña:</p>
              <input type="password" name="password" value="<?= $password  ?>">
              <?= $completeSuContrasena ?>
              <?= $contrasenasNoSonIguales  ?>
            </label>
          <br>
          <br>
            <label for="confirmarPassword">
            <p>Repetí tu contraseña:</p>
            <input type="password" name="confirmarPassword" value="<?= $confirmarPassword  ?>">
            <?= $repitaSuContrasena  ?>
            <?= $contrasenasNoSonIguales ?>
            </label>
          <br>
          <br>
        <div class="botones">
          <p>
            <button id="boton-enviar"type="submit" name="button">Enviar</button>
            <button id="boton-borrar"type="reset" name="reset">Borrar</button>
          </p>
          </div>
          </form>
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
  </body>
</html>
