<?php
include("bd.php");

$ConsultaPro="SELECT * FROM proyecto";

$ResultadoPro=False;                                            
try { 
  $ResultadoPro= mysqli_query($Conexion, $ConsultaPro);
}
    
catch (exception $e)
      { $Mensaje="No se pudo consultar el proyecto";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
      }                             
     
if($ResultadoPro == False) { $Mensaje="No se pudo consultar el proyecto";
} 
                //die($mysqli_error($Conexion));
                      
else {
    echo '<select name="ProyectoEstudiante" id="ProyectoEstudiante">';

    while($RegistroPro=$ResultadoPro->fetch_assoc()){
      if ($Registro["CodigoProyecto"]==$RegistroPro["CodigoProyecto"]) {
        echo '<option value="'.$RegistroPro["CodigoProyecto"].'" selected>'.$RegistroPro["NombreProyecto"].'</option>';
    }
      else  {echo '<option value="'.$RegistroPro["CodigoProyecto"].'">'.$RegistroPro["NombreProyecto"].'</option>';}
    } //Fin del ciclo del listado de proyectos
    echo '</select>';
}



?>