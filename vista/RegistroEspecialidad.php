<?php
    include("Navegacion.php");
    echo "<h1>REGISTRO DE ESPECIALIDAD</h1>";
    include("../controlador/RegistrarEspecialidad.php");
    echo'<form action="RegistroEspecialidad.php" method="post">
        <label for="Codigo">Codigo especialidad:</label>
        <input type="number" name="Codigo" id="Codigo"><br>
        <label for="NombreEspecialidad">Nombre de la Especialidad:</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad"><br>
        <button type="submit">Registrar Especialidad</button>
    </form>';
    include("Footer.php");
    ?>