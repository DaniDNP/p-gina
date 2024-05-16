<?php
    include("Navegacion.php");
    echo "<h1>ACTUALIZAR DE ESTUDIANTES</h1>"; 
    include("../controlador/ActualizarEstudiante.php");
    echo'<form action="ActualizacionEstudiante.php" method="post">
        <label for="CodigoEstudiante">Codigo Estudiante:</label>
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'. $_GET["CodigoEstudiante"].'" ?>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante" value="'.$Registro ["CodigoEstudiante"].'"><br>
        <label for="PrimerNombreEstudiante">Primer Nombre:</label>
        <input type="text" name="PrimerNombreEstudiante" id="PrimerNombreEstudiante" value="'.$Registro ["PrimerNombre"].'"><br>
        <label for="SegundoNombreEstudiante">Segundo Nombre:</label>
        <input type="text" name="SegundoNombreEstudiante" id="SegundoNombreEstudiante" value="'.$Registro ["SegundoNombre"].'"><br>
        <label for="PrimerApellidoEstudiante">Primer Apellido:</label>
        <input type="text" name="PrimerApellidoEstudiante" id="PrimerApellidoEstudiante" value="'.$Registro ["PrimerApellido"].'"><br>
        <label for="SegundoApellidoEstudiante">Segundo Apellido:</label>
        <input type="text" name="SegundoApellidoEstudiante" id="SegundoApellidoEstudiante" value="'.$Registro ["SegundoApellido"].'"><br>
        <label for="CursoEstudiante">Curso:</label>
        '.$Registro ["Curso"].'
        <input type="number" name="CursoEstudiante" id="CursoEstudiante" value="'.$Registro ["Curso"].'"><br>
        
        <label for="EspecialidadEstudiante">Especialidad:</label>';
        include ("../controlador/ComboEspecialidades.php");
        echo '
        <br>
        
        <label for="ProyectoEstudiante">Proyecto:</label>';
        include ("../controlador/ComboProyecto.php");
        echo '
        <br>

        <label for="FechaNacimientoEstudiante">Fecha de Nacimiento:</label>
        <input type="date" name="FechaNacimientoEstudiante" id="FechaNacimientoEstudiante" value="'.$Registro ["FechaNacimiento"].'"><br>
        <button type="submit">Actualizar Estudiante:</button><br>
    </form>';
    include("Footer.php");
    ?>
