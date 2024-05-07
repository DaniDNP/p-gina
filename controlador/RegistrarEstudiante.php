<?php
if (!empty($_POST["CodigoEstudiante"])  && !empty($_POST["PrimerNombreEstudiante"])  && !empty($_POST["PrimerApellidoEstudiante"])  && !empty($_POST["CursoEstudiante"])  && !empty($_POST["EspecialidadEstudiante"])  && !empty($_POST["ProyectoEstudiante"])) {

$CodigoEstudiante = $_POST["CodigoEstudiante"];
$PrimerNombreEstudiante = $_POST["PrimerNombreEstudiante"];
$SegundoNombreEstudiante = $_POST["SegundoNombreEstudiante"];
$PrimerApellidoEstudiante = $_POST["PrimerApellidoEstudiante"];
$SegundoApellidoEstudiante = $_POST["SegundoApellidoEstudiante"];
$CursoEstudiante = $_POST["CursoEstudiante"];
$EspecialidadEstudiante = $_POST["EspecialidadEstudiante"];
$ProyectoEstudiante = $_POST["ProyectoEstudiante"];
$FechaNacimientoEstudiante = $_POST["FechaNacimientoEstudiante"];

include("bd.php");
$Consulta="INSERT INTO estudiante (CodigoEstudiante, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Curso, CodigoEspecialidad, CodigoProyecto, FechaNacimiento) VALUES ( '".$CodigoEstudiante."', '".$PrimerNombreEstudiante."', '".$SegundoNombreEstudiante."', '".$PrimerApellidoEstudiante."', '".$SegundoApellidoEstudiante."', '".$CursoEstudiante."', '".$EspecialidadEstudiante."', '".$ProyectoEstudiante."', '".$FechaNacimientoEstudiante."')";

echo $Consulta;


$Resultado=False;                                            
try { 
  $Resultado= mysqli_query($Conexion, $Consulta);
}
    
catch (Exception $e)
      { $Mensaje="No se pudo registrar el estudiante por error en los datos";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
      }                             
     
if($Resultado == False) { $Mensaje="No se pudo registrar el estudiante";
                //die($mysqli_error($Conexion));
                      }
else {$Mensaje="El estudiante se registro correctamente"; }
                                                 

} //Fin del if

else {
    $Mensaje= "<h3>El codigo, el primer nombre, el primer apellido, el curso, el proyecto y la especialidad son obligatorios</h3>";
 }
echo $Mensaje;
?>
