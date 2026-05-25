<?php
include("conexion.php");
$id=$_GET['id'];
$sql="DELETE FROM herramientas WHERE id='$id'";
$conexion->query($sql);
header("Location: admin.php");
?>
