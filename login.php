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
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Login</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)),
url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1400');
background-size:cover;
}

.login{
width:400px;
padding:40px;
background:rgba(255,255,255,0.1);
backdrop-filter:blur(12px);
border-radius:25px;
box-shadow:0 10px 30px rgba(0,0,0,0.4);
text-align:center
color:white;
}
input{
width:100%;
padding:15px;
margin:12px 0;
border:none;
border-radius:12px;
font-size:16px;
}
button{
background:#ff6b00;
color:white;
border:none;
padding:15px;
width:100%;
font-size:18px;
border-radius:12px;
margin-top:15px;
cursor:pointer;
transition:0.3s;
}
button:hover{
brackground:#ff8533;
transform:translateY(-3px);
}
.error{
banckground:red;
padding:10px;
border-radius:10px;
margin-bottom:15px;
}
</style>
</head>
<body>
<div class="login">
<h1>Inicio de seción</h1>
<?php
if(isset($error)){
echo "<div class='error'>$error</div>";
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
