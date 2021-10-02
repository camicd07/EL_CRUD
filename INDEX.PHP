<!doctype html>
<html>
  <head>
    <title>login</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="miscss/estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap. js"></script>
  </head>  
  <body>
      <div id="div1" class="container">
          <br>
          <div id="div2">
              <img src="IMAGENES/banner.png">
              <div id="div3">
                  <form id="formulario" method="POST" action="menu.php">
                      <br>
                      <strong class="lgris">Ingrese su usuario y contraseña para iniciar sesion</strong>
                      <br>
                      <label class="lgris">Nombre de Usuario:</label>
                      <br>
                      <input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                      <br>
                      <label class="lgris">contraseña:</label>
                      <br>
                      <input type="password" name="clave" value="" required-/>
                      <br><br>
                      <input class="btn btn-primary" type="submit" value="Iniciar sesion">
                      <br><br>
                  </form>
              </div>
          </div>
      </div>
      <br><br>
  </body>
</html>
        