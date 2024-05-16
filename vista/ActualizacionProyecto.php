    
    <?php
    include("Navegacion.php");
    echo "<h1>ACTUALIZACION DE PROYECTOS</h1>";
    include("../controlador/ActualizarProyecto.php"); 
    echo '<form action="ActualizacionProyecto.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoProyecto"].'">
        <label for="CodigoProyecto">Codigo del proyecto:</label>
        <input type="number" name="CodigoProyecto" id="CodigoProyecto" value="'.$Registro ["CodigoProyecto"].'"><br>
        <label for="NombreProyecto">Nombre del proyecto:</label>
        <input type="text" name="NombreProyecto" id="NombreProyecto" value="'.$Registro ["NombreProyecto"].'"><br>
        <label for="Resumen">Resumen:</label>
        <input type="text" name="Resumen" id="Resumen" value="'.$Registro ["Resumen"].'"><br>
        <label for="FechaRegistro">Fecha Registro:</label>
        <input type="text" name="FechaRegistro" id="FechaRegistro" value="'.$Registro ["FechaRegistro"].'"><br>
        
        
        
       
        
        <label for="ProyectoEstudiante">Proyecto:</label>';
        include ("../controlador/ComboProyecto.php");
        echo '
        <br>

    
        <button type="submit">Actualizar Estudiante:</button><br>
        </form>';
        include("Footer.php");
        ?>