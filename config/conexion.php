<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "refettorio";

$conectar = mysqli_connect($host, $usuario, $contrasena, $basedatos);

if (!$conectar) {
  echo "no se pudo conectar a la base de datos";
  # code...
}
