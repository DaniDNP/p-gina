<?php
echo '

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/NIETO_PHP1/css/estilo.css">
</head>
<body>

<ul>
<li><a href="/NIETO_PHP1">Inicio</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Estudiante</a>
    <div class="dropdown-content">
      <a href="/NIETO_PHP1/vista/Estudiante.php">Listar Estudiantes</a></a>
      <a href="/NIETO_PHP1/vista/RegistroEstudiante.php">Registrar Estudiantes</a>
    </div>
  </li>

  <li class="dropdown">

    <a href="javascript:void(0)" class="dropbtn">Proyecto</a>
    <div class="dropdown-content">
      <a href="/NIETO_PHP1/vista/Proyectos.php">Listar Proyectos</a></a>
      <a href="/NIETO_PHP1/vista/RegistroProyectos.php">Registrar Proyectos</a>
    </div>
  </li>
  
  <li class="dropdown">

    <a href="javascript:void(0)" class="dropbtn">Especialidad</a>
    <div class="dropdown-content">
      <a href="/NIETO_PHP1/vista/Especialidad.php">Listar Especialidad</a></a>
      <a href="/NIETO_PHP1/vista/RegistroEspecialidad.php">Registrar Especialidad</a>
    </div>
  </li>
</ul>';





?>
