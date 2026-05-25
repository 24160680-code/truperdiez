<?php
$conexion = new mysqli(
"localhost",
"dev_user",
"User*2026",
"truperdiez"
);
if($conexion->connect_error){
die("Error de conexion: ");
}
?>
