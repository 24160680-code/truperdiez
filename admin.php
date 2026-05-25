<?php
include("conexion.php");
$sql = "SELECT * FROM herramientas";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Sistema Truper</title>
<style>
body{
font-family: Arial;
background-color: #f2f2f2;
text-align: center;
}
h1{
background-color: blue;
color:white;
padding:15px;
}
table{
margin:auto;
border-collapse: collapse;
width: 90%;
background: white;
}
th{
background-color: #333;
color: white;
padding: 10px;
}
td{
padding: 10px;
border: 1px solid #ccc;
}
tr:nth-child(even){
background-color: #f9f9f9;
}
</style>
</head>
<body>
<h1>Sistema de Herramientas Truper</h1>
<table>
<br>
<a href="agregar.php">
<button>
Agregar Herramienta
</button>
</a>
<br><br>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Categoría</th>
<th>Precio</th>
<th>Stock</th>
<th>Eliminar</th>
<th>Editar</th>
</tr>
<?php
 while($fila = $resultado->fetch_assoc()){
?>
<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['categoria']?></td>
<td><?php echo $fila['precio']; ?></td>
<td><?php echo $fila['stock']; ?></td>
<td>
<a href="eliminar.php?id=<?php echo $fila['id']; ?>"
onclick="return confirm('¿Seguro que deseas elimininar?')">
<button>
Eliminar
</button>
</a>
</td>
<td>
<a href="editar.php?id=<?php echo $fila['id']; ?>">
<button>
Editar
</button>
</a>
</td>
</tr>
<?php
 }
 ?>
</table>
</body>
</html>

