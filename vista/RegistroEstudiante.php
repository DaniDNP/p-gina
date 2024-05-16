<?php
    include("Navegacion.php");
    echo "<h1>REGISTRO DE ESTUDIANTES</h1>";
    include("../controlador/RegistrarEstudiante.php"); 
    echo'<form action="RegistroEstudiante.php" method="post">
        <label for="CodigoEstudiante">Codigo Estudiante:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante"><br>
        <label for="PrimerNombreEstudiante">Primer Nombre:</label>
        <input type="text" name="PrimerNombreEstudiante" id="PrimerNombreEstudiante"><br>
        <label for="SegundoNombreEstudiante">Segundo Nombre:</label>
        <input type="text" name="SegundoNombreEstudiante" id="SegundoNombreEstudiante"><br>
        <label for="PrimerApellidoEstudiante">Primer Apellido:</label>
        <input type="text" name="PrimerApellidoEstudiante" id="PrimerApellidoEstudiante"><br>
        <label for="SegundoApellidoEstudiante">Segundo Apellido:</label>
        <input type="text" name="SegundoApellidoEstudiante" id="SegundoApellidoEstudiante"><br>
        <label for="CursoEstudiante">Curso Estudiante:</label>
        <input type="number" name="CursoEstudiante" id="CursoEstudiante"><br>
        <label for="EspecialidadEstudiante">Especialidad</label>';
        include ("../controlador/ComboEspecialidades.php"); 
        echo' <br>
        
        <label for="ProyectoEstudiante">Proyecto</label>';
        include ("../controlador/ComboProyecto.php");
        echo' <br>

        <label for="FechaNacimientoEstudiante">Fecha de Nacimiento:</label>
        <input type="date" name="FechaNacimientoEstudiante" id="FechaNacimientoEstudiante"><br>
        <button type="submit">Registrar Estudiante</button><br>
    </form>';
    include("Footer.php");
    ?>