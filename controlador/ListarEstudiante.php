<?php

include("bd.php");

$Consulta="select * from estudiante";

$Resultado=False;                                            
try { 
  $Resultado= mysqli_query($Conexion, $Consulta);
}
    
catch (Exception $e)
      { $Mensaje="No se pudo consultar el estudiante";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
      }                             
     
if($Resultado == false) { $Mensaje="No se pudo consultar el estudiante";
   //die($mysqli_error($Conexion));
}
                      
else {
    echo '<table border="1">
    <tr>
        <td>Codigo del estudiante</td>
        <td>Primer Nombre</td>
        <td>Segundo Nombre</td>
        <td>Primer Apellido</td>
        <td>Segundo Apellido</td>
        <td>Curso</td>
        <td>Codigo Especialidad</td>
        <td>Codigo Proyecto</td>
        <td>Fecha de Nacimiento</td>
        <td colspan="2">Acciones</td>
       
    </tr>';
    while($Registro=$Resultado->fetch_assoc()){
        echo'
        <tr>
            <td>'.$Registro["CodigoEstudiante"].'</td>
            <td>'.$Registro["PrimerNombre"].'</td>
            <td>'.$Registro["SegundoNombre"].'</td>
            <td>'.$Registro["PrimerApellido"].'</td>
            <td>'.$Registro["SegundoApellido"].'</td>
            <td>'.$Registro["Curso"].'</td>
            <td>';
            include("NombreEspecialidad.php");
            echo'</td>
            <td>';
            include("NombreProyecto.php");
            echo'</td>   
            <td>'.$Registro["FechaNacimiento"].'</td>
            <td><a href="ActualizacionEstudiante.php?CodigoEstudiante='.$Registro["CodigoEstudiante"].'" >Editar</a></td>
            <td><a href="#" onclick="Preguntar('.$Registro ["CodigoEstudiante"].')">Eliminar</td>
        </tr>';
        } //Fin del ciclo del listado de estudiante
    echo '</table>';
}


       
?>
<script type="text/javascript">
  function Preguntar(CodigoEstudiante)
  {
    if(confirm("¿Estas seguro de eliminar el estudiante con codigo "+CodigoEstudiante+"?"))
    {
      window.location.href = "Estudiante.php?CodigoEstudiante="+CodigoEstudiante;
    }
  }
</script>