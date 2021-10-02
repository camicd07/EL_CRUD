<!doctype html>
<html>
 <head>
   <title>Elimitacion de aprendices</title>
   <meta http-equiv="content-type" content="text/html; chaarset=utf-8">
   <meta name="viewport" content="width=devide-widyh, initial-scale=1,
   shrink-to-fit=no">
   <link href="css/bootstrap.min.css" rel="stylesheet"/>
   <link href="miscss/estilo.css" rel="stylesheet"/>
    <script src="js/boottrap.js"></script>
  </head>
  <body>
  <div id="divconsulta" class="container">
      <br>
      <div id="div2">
       <div id="div4">
           <form name="formulario" role="form" method="POST">
               <div class="col-md-12">
                   <strong class="igris">Ingrese criterio de busqueda</strong>
                   <br> <br>
                  <div class="form-rom">
                      <div class="form-group col-md-5">
                          <input class="form-control" type="number" name="numid"
                          min="9999" max="99999999999" value="" placeholder="IDENTIFICACION"/>
                      </div>
                      <div class="form-group col-md-3">
                          <input class="btn btn-primary" type="submit" value="Eliminar">
                      </div>
                  </div>
                  <br>
               </div>
           </form>
           <br>
       </div>
       
       <div id="divconsulta2">
        <div id="divconsula2">
            <?php
            if ($_SERVER['REQUEST_METHOD']==='POST')
            {
                include('funciones.php');
                $vnumid=$_POST['numid'];
                $vnombres=$_POST['Nombres'];
                $vapellidos=$_POST['Apellidos'];
                $miconexcion=conectar_bd('1234', 'sena_bd');
                $resultado=consulta($miconexcion, "select from aprendices where 
                apre_Numind='{$vnumind}'");
                $resultado2=consulta($miconexcion, "delete from aprendices where 
                apre_Numind='{$vnumind}'");
                if($resultado->num_rows>0)
                {
                    $fila=$resultado->fetch_object();
                    echo$fila->apre_id." ".$fila->Apre_tipoid." ". $fila->apre_Numid." ". $fila->Apre_nombre." ".
                    $fila->Apre_apellidos." ".$fila->Apre_direccion." ".$fila->Apre_telefono." ".$fila->Apre_ficha."<br>";

                    if($resultado2)
                    echo "<br> datos borrados exitosamente";
                }
                else{
                    echo "no existe regristros";

                }
                $miconexcion->close();
               }?>
               </div>
            </div>
        </div>
    </body>
</html>
