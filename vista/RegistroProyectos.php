<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proyectos</title>
</head>
<body>
    <h1>Registro de proyectos</h1>
    <?php include("../controlador/RegistrarProyecto.php"); ?>
    <form action="RegistroProyectos.php" method="post">
        <label for="CodigoProyecto">Codigo Proyecto:</label>
        <input type="number" name="CodigoProyecto" id="CodigoProyecto"><br>
        <label for="NombreProyecto">Nombre del Proyecto:</label>
        <input type="text" name="NombreProyecto" id="NombreProyecto"><br>
        <label for="Resumen">Resumen:</label>
        <textarea name="Resumen" id="Resumen" rows="5" cols="20"></textarea><br>
        <label for="FechaRegistro">Fecha de registro:</label>
        <input type="date" name="FechaRegistro" id="FechaRegistro"><br>
        <button type="submit">Registrar Proyecto</button>
    </form>
</body>
</html>