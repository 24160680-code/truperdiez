<?php
include("conexion.php");

$sql = "SELECT * FROM herramientas";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name"viewport" content="width=device-width,initial-scale=1.0">
<title>Administrador</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel"stylesheet">
<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}
body{
background: #of172a;
padding:40px;
color:white;
}
h1{
text-align:center;
margin-bottom:30px;
font-size:45px;
}
h1 span{
color:#ff6b00;
}
.top{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:30px;
}
.btn{
background:#ff6b00;
color:white;
padding:14px 25px;
text-decoraction:none;
border-radius:10px;
font-weight:600;
transition:0.3s;
}
.btn:hover{
background:#ff8533;
}

table{
margin:auto;
border-collapse: collapse;
width: 100%;
background: #1e293b;
border-radius:20px
overflow:hidden;
box-shadow:0px 10px 25px rgba(0,0,0,0.4);
}
th{
background:#ff6b00;
padding: 18px;
}
td{
padding: 18px;
text-align:center;
border-bottom: 1px solid  rgba(255,255,255,0.1);
}
tr:hover{
background-color: #334155;
}
.editar{
background:#2563eb;
padding:10px 18px;
text-decoraction:none;
color:white;
border-radius:8px;
}
.eliminat{
background:#dc2626;
padding:10px 18px;
text-decoration:none;
color:white;
border-raddis:8px;
}
</style>
</head>
<body>
<h1>Panel <span>Administrador</span></h1>
<a href="index.php" class="btn">Inicio</a>
<a href="agregar.php" class="btn">Agregar Herramientas</a>
</div>
<table>
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
<a class="eliminar" href="eliminar.php?id=<?php  echo $fila['id']; ?>">
Eliminar
</a>
</td>
<td>
<a class="editar" href="editar.php?id=<?php echo $fila['id']; ?>">
Editar
</a>
</td>
</tr>
<?php
 }
 ?>
</table>
</body>
</html>

