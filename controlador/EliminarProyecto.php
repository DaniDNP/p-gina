<?php
if(!empty($_GET["CodigoProyecto"])){
include("bd.php");
$CodigoProyecto=$_GET["CodigoProyecto"];

$ConsultaDel="DELETE FROM proyecto WHERE proyecto.CodigoProyecto = ".$CodigoProyecto;

//echo $ConsultaDel;

$ResultadoDel=False;                                            
try { 
  $ResultadoDel= mysqli_query($Conexion, $ConsultaDel);
}
    
catch (Exception $e)
      { $Mensaje="No se pudo eliminar el proyecto con codigo: ".$CodigoProyecto;
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
      }                             
     
if($ResultadoDel == false) { $Mensaje="se pudo eliminar el proyecto con codigo: ".$CodigoProyecto;
   //die($mysqli_error($Conexion));
}
                      
else { $Mensaje="Se elimino el proyecto con codigo: ".$CodigoProyecto;
    } //Fin del ciclo del listado de proyecto

    echo $Mensaje;

  }

       
?>