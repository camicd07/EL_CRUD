<!doctype html>
<html>
  <head>
   <title>Modificacion de aprendices</title>
   <meta http-equiv="content-type"content=text/html; charset=utf-8">
   <meta name="viewport" content="widt=device-width, initial-scale=1,shrink-to-no">
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
                    <div class="form-group col-md-5">
    
                        <input class="form-control" type="number" name="numind" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION"/>
                    </div>
                    <div class="form-group col-md-3">
                    <input class="btn btn-primary" type="submit" value="Consultar">
                    </div>
                </div>
            </div>
        </form>
        <br>
    </div>
     <div id="divconsulta2">
     <?php
     if ($_SERVER['REQUEST_METHOD']==='POST')
     {
         include('funciones.php');
         session_start();
         $vnumind=$_POST['numind'];
         $miconexion=conectar_bd('1234', 'sena_bd');
         $resultado=consultar($miconexion,"select * from aprendices where Apre_numid='{$vnumind}'");
         if($resultado->num_rows>0)
     {
         $fila=$resultado->fetch_object();
         $_SESSION['idel']=$fila->Apre_id_;
         ?>
         <form id="formulario2" role="form" method="post"
         action="actualizar_aprendiz.php">
         <div class="col-md-12">
             <strong class="igris">Datos del aprendiz<strong></strong><br>

             <label class="igris"> id:</label>
             <input class="form-control" type="text" name="ide"
             disabled=disabled value=<?php echo $fila->Apre_id ?>"/>
      
              <label class="igris"> Nombres:</label>
             <input class="form-control" style="text-transform:
                uppercase," type="text" name="nombres" require value="<?php echo $fila->Apre_nombre ?>"/>

              <label class="igris"> Apellidos:</label>
             <input class="form-control" style="text-transform:
                uppercase," type="text" name="APELLIDOS" require value="<?php echo $fila->Apre_apellidos ?>"/> require/>

              <label class="igris">Direccion:</label>
             <input class="form-control" style="text-transform:
                uppercase," type="text" name="Direccion" require value="<?php echo $fila->Apre_direccion ?>"/> require/>
              
              <label class="igris">Telefono:</label>
              <input class="form-control" type="number"
              name="telefono" min="9999" max="9999999999999" value="<?php echo $fila->Apre_telefono ?>" require/>
              <br>
              <input class="btn btn-primary" type="submit" value="Actualizar">
            <br>
         </div>
     </form>
   <?php
           }
           else{
               echo "No existen regritros";
               }
             $miconexion->close()
            }?>
            </div>
         </div>
      </div>
  </body>
</html>
    