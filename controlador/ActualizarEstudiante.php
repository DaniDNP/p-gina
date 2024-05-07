<?php



include("bd.php");

if (!empty($_GET["CodigoEstudiante"])){

  $Consulta = "select * from estudiante where CodigoEstudiante = ".$_GET["CodigoEstudiante"];
  $Resultado=False;


  try { 
  $Resultado= mysqli_query($Conexion, $Consulta);

  }
    
  catch (Exception $e)
      { $Mensaje="No se pudo actualizar el estudiante con codigo ";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
      }                             
     
  if($Resultado == False) { $Mensaje="No se pudo actualizar el estudiante con codigo ".$_GET["CodigoEstudiante"];
  }
                //die($mysqli_error($Conexion));
                  

  else {$Mensaje="Se pudo actualizar el estudiante con codigo ".$_GET["CodigoEstudiante"];
    $Registro=$Resultado->fetch_assoc();                                       
  } 
  }                 



else if (!empty($_POST["CodigoEstudiante"])  && !empty($_POST["PrimerNombreEstudiante"])  && !empty($_POST["PrimerApellidoEstudiante"])  && !empty($_POST["CursoEstudiante"])  && !empty($_POST["EspecialidadEstudiante"])  && !empty($_POST["ProyectoEstudiante"])) {

  $CodigoEstudiante = $_POST["CodigoEstudiante"];
  $PrimerNombreEstudiante = $_POST["PrimerNombreEstudiante"];
  $SegundoNombreEstudiante = $_POST["SegundoNombreEstudiante"];
  $PrimerApellidoEstudiante = $_POST["PrimerApellidoEstudiante"];
  $SegundoApellidoEstudiante = $_POST["SegundoApellidoEstudiante"];
  $CursoEstudiante = $_POST["CursoEstudiante"];
  $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"];
  $ProyectoEstudiante = $_POST["ProyectoEstudiante"];
  $FechaNacimientoEstudiante = $_POST["FechaNacimientoEstudiante"];
  
  $Consulta ="UPDATE estudiante SET CodigoEstudiante = '".$CodigoEstudiante."', PrimerNombre = '".$PrimerNombreEstudiante."', SegundoNombre = '".$SegundoNombreEstudiante."', PrimerApellido = '".$PrimerApellidoEstudiante."', SegundoApellido = '".$SegundoApellidoEstudiante."', Curso = '".$CursoEstudiante."', CodigoEspecialidad = '".$EspecialidadEstudiante."', CodigoProyecto = '".$ProyectoEstudiante."', FechaNacimiento = '".$FechaNacimientoEstudiante."' WHERE estudiante.CodigoEstudiante = ".$_POST["CodigoActual"];
  
  
  echo $Consulta;

echo $Consulta;
$Resultado=False;                                            
try { 
  $Resultado= mysqli_query($Conexion, $Consulta);
}
    
catch (Exception $e)
      { $Mensaje="No se pudo actualizar el estudiante por error en los datos";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
      }                             
     
if($Resultado == False) { $Mensaje="No se pudo actualizar  el estudiante";
                //die($mysqli_error($Conexion));
                      }
else {$Mensaje="El estudiante se actualizo correctamente"; 
  //echo $Consulta;    
  
  
  header('Location: Estudiante.php');
}
                                                 

} //Fin del if

else {
    $Mensaje= "<h3>El codigo, el primer nombre, el primer apellido, el curso, el proyecto y la especialidad son obligatorios</h3>";
 }
echo "<h3>".$Mensaje."</h3>";

//$EstudianteActualizando=$Resultado->fetch_assoc();
//echo $EstudianteActualizando["NombreEspecialidad"];


?>
