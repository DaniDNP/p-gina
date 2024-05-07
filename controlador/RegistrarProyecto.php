<?php
if (!empty($_POST["CodigoProyecto"])  && !empty($_POST["NombreProyecto"])  && !empty($_POST["Resumen"])  && !empty($_POST["FechaRegistro"])){
$CodigoProyecto = $_POST["CodigoProyecto"];
$NombreProyecto = $_POST["NombreProyecto"];
$Resumen = $_POST["Resumen"];
$FechaRegistro = $_POST["FechaRegistro"];

include("bd.php");

$Consulta="INSERT INTO proyecto (CodigoProyecto, NombreProyecto, Resumen, FechaRegistro) VALUES ( '".$CodigoProyecto."', '".$NombreProyecto."', '".$Resumen."', '".$FechaRegistro."')";
echo $Consulta;
$Resultado=False;                                            
try   {
    $Resultado= mysqli_query($Conexion, $Consulta);
}     
catch (Exception $e)
      { $Mensaje="No se pudo registrar el proyecto por error en los datos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
      }                             
     
if($Resultado == False) { $Mensaje="No se pudo registrar el proyecto";
             //die($mysqli_error($Conexion));
                      }
else {$Mensaje="El proyecto se registro correctamente"; }
} //Fin del if

else {
    $Mensaje= "<h3>El codigo del proyecto y el nombre del proyecto son obligatorio </h3>";
 }
echo $Mensaje;
?>
