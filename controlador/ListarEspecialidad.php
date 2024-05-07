<?php

include("bd.php");

$Consulta="select * from especialidad";

$Resultado=False;                                            
try { 
  $Resultado= mysqli_query($Conexion, $Consulta);
}
    
catch (Exception $e)
      { $Mensaje="No se pudo consultar la especialidad";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
      }                             
     
if($Resultado == false) { $Mensaje="No se pudo consultar la especialidad";
   //die($mysqli_error($Conexion));
}
                      
else {
    echo '<table border="1">
    <tr>
        <td>Codigo de la especialidad</td>
        <td>Nombre de la especialidad</td>
        <td colspan="2">Acciones</td>
       
    </tr>';
    while($Registro=$Resultado->fetch_assoc()){
        echo'
        <tr>
            <td>'.$Registro["CodigoEspecialidad"].'</td>
            <td>'.$Registro["NombreEspecialidad"].'</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>';
        } //Fin del ciclo del listado de especialidad
    echo '</table>';
}


       
?>