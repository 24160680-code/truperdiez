<?php
include("conexion.php");
if($_POST){
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$sql="INSERT INTO herramientas (nombre,categoria,precio,stock)
values ('$nombre','$categoria','$precio','$stock')";
$conexion->query($sql);
header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Agregar</title>
<style>
body{
font-family:Arial;
text-align:center;
background:#f2f2f2;
}
form{
background:white;
width:300px;
margin:auto;
padding:20px;
margin-top:50px;
}
input{
width:90%;
padding:10px;
margin:10px;
}
button{
background:green;
color:white;
padding:10px;
border:none;
width:95%;
}
</style>
</head>
<body>
<form method="POST">
<h1>Agregar Herramienta</h1>
<input type="text" name="nombre" placeholder="Nombre">
<input  type="texy" name="categoria" placeholder="Categoria">
<input type"number" step="0.01" name="precio" placehoder="Precio">
<input type="number" name="stock" placeholder="Stock">
<button type="submit">
Guardar
</button>
</form>
</body>
</html>
