<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de Estudiantes</title>
</head>
<body>
    <h1>Actualizacion de Estudiantes</h1>
    <?php include("../controlador/ActualizarEstudiante.php"); ?>
    <form action="ActualizacionEstudiante.php" method="post">
        <label for="CodigoEstudiante">Codigo Estudiante:</label>
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="<?php echo $_GET["CodigoEstudiante"]; ?>">
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante" value="<?php echo $Registro ["CodigoEstudiante"]; ?>"><br>
        <label for="PrimerNombreEstudiante">Primer Nombre:</label>
        <input type="text" name="PrimerNombreEstudiante" id="PrimerNombreEstudiante" value="<?php echo $Registro ["PrimerNombre"]; ?>"><br>
        <label for="SegundoNombreEstudiante">Segundo Nombre:</label>
        <input type="text" name="SegundoNombreEstudiante" id="SegundoNombreEstudiante" value="<?php echo $Registro ["SegundoNombre"]; ?>"><br>
        <label for="PrimerApellidoEstudiante">Primer Apellido:</label>
        <input type="text" name="PrimerApellidoEstudiante" id="PrimerApellidoEstudiante" value="<?php echo $Registro ["PrimerApellido"]; ?>"><br>
        <label for="SegundoApellidoEstudiante">Segundo Apellido:</label>
        <input type="text" name="SegundoApellidoEstudiante" id="SegundoApellidoEstudiante" value="<?php echo $Registro ["SegundoApellido"]; ?>"><br>
        <label for="CursoEstudiante">Curso:</label>
        <?php echo $Registro ["Curso"]; ?>
        <input type="number" name="CursoEstudiante" id="CursoEstudiante" value="<?php echo $Registro ["Curso"]; ?>"><br>
        
        <label for="EspecialidadEstudiante">Especialidad:</label>
        <?php include ("../controlador/ComboEspecialidades.php"); ?>
        <br>
        
        <label for="ProyectoEstudiante">Proyecto:</label>
        <?php include ("../controlador/ComboProyecto.php"); ?>
        <br>

        <label for="FechaNacimientoEstudiante">Fecha de Nacimiento:</label>
        <input type="date" name="FechaNacimientoEstudiante" id="FechaNacimientoEstudiante" value="<?php echo $Registro ["FechaNacimiento"]; ?>"><br>
        <button type="submit">Actualizar Estudiante:</button><br>
    </form>
</body>
</html>