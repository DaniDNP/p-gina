<?php
if (!empty($_POST["Codigo"])  && !empty($_POST["NombreEspecialidad"])) {
$CodigoEspecialidad = $_POST["Codigo"];
$NombreEspecialidad = $_POST["NombreEspecialidad"];

include("bd.php");
$Consulta="INSERT INTO especialidad (CodigoEspecialidad, NombreEspecialidad) VALUES ( '".$CodigoEspecialidad."', '".$NombreEspecialidad."')";
$Resultado=False;                                            
try   {
    $Resultado= mysqli_query($Conexion, $Consulta);
}     
catch (Exception $e)
      { $Mensaje="No se pudo registrar la especialidad por error en los datos";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
      }                             
     
if($Resultado == False) { $Mensaje="No se pudo registrar la especialidad";
                //die($mysqli_error($Conexion));
                      }
else {$Mensaje="La especialidad se registro correctamente"; }
                                                 

} //Fin del if

else {
    $Mensaje= "<h3>El codigo y el nombre de la especialidad es obligatorio </h3>";
 }
echo $Mensaje;
?>
