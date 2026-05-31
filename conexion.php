<?php
$conexion = new mysqli(
"localhost",
"dev_user",
"Dev2026",
"truperdiez",
);
if($conexion->connect_error){
die("Error de conexion: ". $conexion->connect_error);
}
?>
