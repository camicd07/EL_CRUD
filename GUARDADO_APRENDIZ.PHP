<?php
include('funciones.php');
$vitipoid=$_POST['tipoid'];
$vnumid=$_POST['numid'];
$vnombres=$_POST['Nombres'];
$vapellidos=$_POST['apellidos'];
$vdireccion=$_POST['direccion'];
$vtelefono=$_POST['telefono'];
$vficha=$_POST['ficha'];

$miconexcion=conectar_bd('1234', 'sena_bd');
$resultado=consulta($miconexion,"insert into aprendices (apre_tipoid,apre_numid, apre_nombres, apre_apellido,apre_direccion,apre_telefono,apre_ficha)
values('{$vtipoid}','{$vnumid}','{$nombre}','{vapellido}','{vdireccion}','{vtelefono}','{vficha}');

if ($resultado)
   {
    echo "guardado exitoso";
   }
?>
