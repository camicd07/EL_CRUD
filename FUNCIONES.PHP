<?php
function conectar_bd($clave,$basedatos)
{
    $conexion= new myqli('localhost', 'root', $clave, $basedatos);

    if ($conexion->connect_error)
{
    die('Error de conexion ('. $mysql->connect_errno . ') '. $mysql->connect_error)
}
return $conexion;
}

function consulta ($conexion,$consulta_sql)
{
    $resultado=$conexion->query($consulta_sql);
    
    if(!$resultado)
    {
        echo 'No se pudo ejecutar la consulta: ' . $conexion->error;
        exit;
    }

    return $resultado;
}
?>