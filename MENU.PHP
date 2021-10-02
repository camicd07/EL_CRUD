<?php
include('funciones.php');
session_star();
$_SESSION['nusuario']=$_POST['usuario'];
$_SESSION['nclave']=$_POST['clave'];

$miconexion=conectar_bd('1234', 'sena_bd');
$resultado=consulta($miconexion,"select * from usuarios where")
usua_nomuser='{$_SESSION['nusuario']}' and
usua_contra='{$_SESSION['nclave']}'");
?>
<!doctype html>
<html>
<head>
<title>menu principal</title>
<meta http-equiv="content-type"content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<link href="css/bootstrap.min.css" rel=stylesheet"/>
<link href="miscc/estilos.css" rel="stylesheet"/>
<script src=js/bootstrap.js"></script>
</head>
<body>
<div id="div1" class="container">
<br>
<div id="div2">
<?php if ($resultado->num_roms>0) { ?> <img src="IMAGENES/banner2.png"> <?png } ?>
<div id="div3" >
   <?php
   if($resultado->num_rows>0)
   {
       $fila = $resultado->fectch_object();
       $_SESSION['Tipo_usuario']=$fila->usua_tipo;
       ?>
       <label class="lgris"Bienvenido <?php echo
       $_SESSION['nusuario'] ?></label> <br>

       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='regristro_aprendiz.php'" 
       value="regristro_aprendices">
       <input style="width:40%;" class="btn btn-primary" value="regristro_aprendices">

       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='regristro_aprendiz.php'" 
       value="regristro_aprendices">
       <input style="width:40%;" class="btn btn-primary" value="regristro_aprendices">

       <br> <br>

       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='regristro_aprendiz.php'" 
       value="regristro_aprendices">
       <input style="width:40%;" class="btn btn-primary" value="regristro_aprendices">

       <br> <br>

       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='index.php'" value="crear programa">
       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='index.php'" value='consultar programa">

       <br> <br>

       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='index.php'" value="modificar programa">
       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='index.php'" value="eliminar programa">

       <br> <br>

       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='index.php'" value="crear ficha">
       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='index.php'" value="consultar ficha">

       <br> <br>

       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='index.php'" value="modificar ficha">
       <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='index.php'" value="eliminar ficha">
       
               <?php

                }
                else

                {
                 echo"Ususario o clave invalido";
 
               }
              $miconexion->close();
               ?>
                <br> <br>
              </div>
           </div>
        </div>
    </body>
</html>



