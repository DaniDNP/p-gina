<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro del Estudiante</title>
</head>
<body>
    <h1>Registro del Estudiante</h1>
    <?php include("../controlador/RegistrarEstudiante.php"); ?>
    <form action="RegistroEstudiante.php" method="post">
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
        
        <label for="EspecialidadEstudiante">Especialidad</label>
        <?php include ("../controlador/ComboEspecialidades.php"); ?>
        <br>
        
        <label for="ProyectoEstudiante">Proyecto</label>
        <?php include ("../controlador/ComboProyecto.php"); ?>
        <br>

        <label for="FechaNacimientoEstudiante">Fecha de Nacimiento:</label>
        <input type="date" name="FechaNacimientoEstudiante" id="FechaNacimientoEstudiante"><br>
        <button type="submit">Registrar Estudiante</button><br>
    </form>
</body>
</html>