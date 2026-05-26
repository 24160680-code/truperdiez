<?php
include("conexion.php");
if($_POST){
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$sql = "UPDATE herramientas SET
nombre='$nombre',
categoria='$categoria',
precio='$precio',
stock='$stock'
WHERE id='$id'";
$conexion->query($sql);
header("Location: admin.php");
}
$id = $_GET['id'];
$sql="SELECT * FROM herramientas WHERE id='$id'";
$resultado=$conexion->query($sql);
$fila=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>Editar</title>
<style>
body{
font-family:Arial;
background:#f2f2f2;
text-align:center;
}
form{
background:white;
width:300px;
margin:auto;
padding:20px;
margin-top:50px;
border-radius:1opx;
}
input{
width:90%;
padding:10px;
margin:10px;
}
button{
background:blue;
color:white;
padding:10px;
border:none;
width:95%;
}
</style>
</head>
<body>
<form method="POST">
<h1>Editar Herramienta</h1>
<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
<input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>">
<input type="text" name="categoria"  value="<?php echo $fila['categoria']; ?>">
<input type="number" step="0.01" name="precio" value="<?php echo $fila['precio']; ?>">
<input type="number" name="stock" value="<?php echo $fila['stock']; ?>">
<button type="submit" >
Actualizar
</button>
</form>
</body>
</html>
