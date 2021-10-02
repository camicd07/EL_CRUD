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
$resultado=consulta($miconexion, "update aprndices set apre_nombres='{$vnombres}', apre_apellido='{$vapellido}',
apre_Direccion='{$vdireccion}', apre_telefono='{$vtelefono}' where Apre_id='{$vide}'

if ($miconexion->affected_rows>0)
{
    echo "Actualizacion exitosa";
}
?>