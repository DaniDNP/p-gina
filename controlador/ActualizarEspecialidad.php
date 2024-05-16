<?php



include("bd.php");

if (!empty($_GET["CodigoEspecialidad"])){

  $Consulta = "select * FROM especialidad where CodigoEspecialidad= ".$_GET["CodigoEspecialidad"];
  $Resultado=False;
  //echo $Consulta;

  try { 
  $Resultado= mysqli_query($Conexion, $Consulta);

  }
    
  catch (Exception $e)
      { $Mensaje="No se pudo actualizar la especialidad ";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
      }                             
     
  if($Resultado == False) { $Mensaje="No se pudo actualizar la especialidad ".$_GET["CodigoEspecialidad"];
  }
                //die($mysqli_error($Conexion));
                  

  else {$Mensaje="Se pudo actualizar la especialidad ".$_GET["CodigoEspecialidad"];
    $Registro=$Resultado->fetch_assoc();                                       
  } 
  }                 



else if (!empty($_POST["CodigoEspecialidad"])  && !empty($_POST["NombreEspecialidad"])) {

  $CodigoEspecialidad = $_POST["CodigoEspecialidad"];
  $NombreEspecialidad = $_POST["NombreEspecialidad"];


  $Consulta ="UPDATE proyecto SET CodigoProyecto = '".$CodigoProyecto."', NombreProyecto = '".$NombreProyecto."', Resumen = '".$Resumen."', FechaRegistro = '".$FechaRegistro."' WHERE proyecto.CodigoProyecto = ".$_POST["CodigoActual"];

  
  
  echo $Consulta;

echo $Consulta;
$Resultado=False;                                            
try { 
  $Resultado= mysqli_query($Conexion, $Consulta);
}
    
catch (Exception $e)
      { $Mensaje="No se pudo actualizar el Proyecto por error en los datos";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
      }                             
     
if($Resultado == False) { $Mensaje="No se pudo actualizar  el Proyecto";
                //die($mysqli_error($Conexion));
                      }
else {$Mensaje="El Proyecto se actualizo correctamente"; 
  //echo $Consulta;    
  
  
  header('Location: Proyectos.php');
}
                                                 

} //Fin del if

else {
    $Mensaje= "<h3>El codigo del proyecto, el nombre del proyecto, el resumen y la fecha de registro son obligatorios</h3>";
 }
echo "<h3>".$Mensaje."</h3>";

//$EstudianteActualizando=$Resultado->fetch_assoc();
//echo $EstudianteActualizando["NombreEspecialidad"];


?>
