<?php

if($_POST){

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if(
$usuario == "24160680@itoaxaca.edu.mx"
&& $password == "24160680TSO"
){

	header("Location: admin.php");

}else{
$error="Datos incorrectos";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body{
font-family: Arial;
background:#f2f2f2;
text-align:center;
}
.login{
width:300px;
margin:auto;
margin-top:100px;
background:white;
padding:30px;
border-radius:10px;
}
input{
width:90%;
padding:10px;
margin:10px;
}
button{
background:blue;
color:white;
border:none;
padding:10px;
width:95%;
}
</style>
</head>
<body>
<div class="login">
<h1>Inicio de seción</h1>
<?php
if(isset($error)){
echo $error;
}
?>
<form method="POST">
<input type="text" name="usuario" placeholder="Usuario">
<input type="password" name="password" placeholeder="Password">
<button type="submit">
Entrar
</button>
</form>
</div>
</body>
</html>
