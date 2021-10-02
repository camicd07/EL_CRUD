<!doctype html>
<html>
  <head>
   <title>Consulta de aprendices</title>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=devide-width, initial-scale=1,
   shrink-to-fit=no">
   <link href="css/bootstrap.min.css" rel="stylessheet"/>
   <link href="miscss/estilos.css" rel="stylessheet"/>
   <script src="js/bootstrap.js"></script>
   </head>
   <body>
       <div id="divconsula" class="container">
        <br>
       <div id="div2">
        <div id="div4">
        <form name="formulario"role="form" method="POST">
            <div class="col-md-12>
                <strong class="ingris"> Ingrese criterio de busqueda</strong>
            <br> <br>
            <div class="form-row">
                <div class="form-group col-md-3">

                    <input class="form-control" type="number" name="numind" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION"/>
                </div>
                <div class="form-group col-md-3">
                    <input class="="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="nombres"/>
                   
                </div>
                <div class="form-group col-md-3">
                <input class="="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="apellidos"/>
                
                </div>
                <div class="form-group col-md-3">
                <input class="btn btn-primary" type="submit" value="consultar">
                </div>
            </div>
            <br>
        </div>
    </form>
    <br>
</div>

       <div id="divconsula2">
       <?php
       if ($_SERVER['REQUEST_METHOD']==='POST')
       {
           include('funciones.php');
           $vnumid=$_POST['numid'];
           $vnombres=$_POST['Nombres'];
           $vapellidos=$_POST['Apellidos'];
           $miconexcion=conectar_bd('1234',"select * from aprendices where
           trim(apre_numind)like '%{$vnumind}%' and (trim(apre_Nombres) like
           '%{%vnombres}'%'
           and trim(apre_apellidos)like '%{vapellido}%')");
           if($resultado->num_rows>0)
           {
               while($fila=$resultado-> fetch_object())
           {
               echo $fila->Apre_id." ".$fila->apre_tipoid." ". $fila->Apre_Numind." ".$fila->apre_Nombres." ".$fila->Apre_direccion."
               ",.$fila->Apre_telefono." ".$fila->Apre_ficha. "<br>";
           }
          
          }

             else{
                echo "No existen resgristro";
                }
             $miconexcion->close();
             }?>
           </div>
        </div>
     </div>
  </body>
</html>













                  



