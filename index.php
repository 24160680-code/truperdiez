<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name"viewport" content="width=device-width,initial-scale=1.0">
<title>Truper Diez</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}
body{
background:#0f172a;
color:white;
}
header{
width:100%;
padding:20px 8%;
display:flex;
justify-content:space-between;
align-items:center;
background:rgba(0,0,0,0.3);
backdrop-filter:blur(10px);
position:fixed;
top:0;
z-index:1000;
}
.logo
font-size:32px;
font-weight:700;
color:#ff6b00;
}
nav a{
text-decoraction:none;
color:white;
margin-left:25px;
font-weight:500;
transition:0.3s;
}
nav a:hover{
color:#ff6b00;
}
.hero{
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
padding:100px 10%;
background;
linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.7)),
url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1600');
background-size:cover;
bacground-position:center;
}
.hero-content h1{
font-size:70px;
margin-bottom:20px;
}
.hero-content span{
color:#ff6b00;
}
.hero-content p{
font-size:22px;
margin-bottom:35px;
color:#ddd;
}
.btn{
display:incline-block;
padding:15px 35px;
background:#ff6b00;
color:white;
text-decoration:none;
border-radius:12px;
font-weight:600;
transition:0.3s;
box-shadow:0 10px 20px rgba(255,107,0,0.3);
}
.btn:hover{
transform:translateY(-5px);
background:#ff8533;
}
.section{
padding:80px 8%;
}
.title{
text-align:center;
font-size:45px;
margin-bottom:50px;
}
.cards{
display:grid;
grid-templace-columns:repeat(auto-fit,minmax(280px,1fr));
gab:30px;
}
.card{
background:#1e293b;
border-radius:20px;
overflow:hidden;
transition:0.4s;
box-shadow:0 10px 25px rgba(0,0,0,0.4);
}
.card:hover{
transform:translateY(-10px);
}
.card img{
width:100%;
height:250px;
object-fit:cover;
}
.card-content{
padding:25px;
}
.card-content h3{
font-size:24px;
margin-bottom:15px;
color:#ff6b00;
}
.card-content p{
color:#ddd;
line-height:1.6;
}
.info{
background:#1e293b;
padding:60px;
border-radius:25px;
margin-top:60px;
box-shadow:0 10px 25px rgba(0,0,0,0.4);
}
.info h2{
color:#ff6b00;
margin-bottom:15px;
font-size:35px;
}
.info p{
line-height:1.8;
margin-bottom:30px;
color:#ddd;
}
footer{
background:#020617;
padding:30px;
text-align:center;
margin-top:60px;
color:#aaa;
}
@media(max-width:768px){
.hero-content h1{
font-size:45px;
}
nav{
display:none;
}
}
</style>
</head>
<body>
<header>
<div class="logo">TRUPER DIEZ</div>
<nav>
<a href="#">Inicio</a>
<a href="#productos">Productos</a>
<a href="#nosotros">Nosotros</a>
<a href="login.php">Login</a>
</nav>
</header>
<section class="hero">
<div class="hero-content">
<h1>erramientas <span>Profesionales</span></h1>
<p>
La mejor tienda de herramientas modernas para hogar,construcción e industrial.
</p>
<a hfer="login.php" class="btn">Entrar al Sistema</a>
</div>
</section>
<section class="section" id="productos">
<h2 class="title">Nuestros <span>Productos</span></h2>
<div class="cards">
<div class="card">
<img src="https://images.unsplash.com/photo-1581147036324-c1c5d7b5c1c4?q=80&w=1200">
<div class="card-content">
<h3>Martillos</h3>
<p>
Herramientas resistentes y profesionales para cualquier trabajo.
</p>
</div>
</div>
<div class="card">
<img src="https://images.unsplash.com/photo-1504148455328-c376907d081c?q=80&w=1200">
<div class="card-content">
<h3>Taladros</h3>
<p>
Máxima potencia y precisión para profesionales.
</p>
</div>
</div>
<div class="card">
<img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1200">
<div class="card-content">
<h3>Seguridad</h3>
<p>
Equipo de protección industrial de alta calidad.
</p>
</div>
</div>
</div>
<div class="info" id="nosostros">
<h2>Misión</h2>
<p>
Brindar herramientas de alta calidad con innovación,seguridad y confianza.
</p>
<h2>Visión</h2>
<p>
Ser una empresa lider en herramientas y soluciones insdustriales.
</p>
<a href="login.php" class="btn">Ir al login</a>
</div>
</section>
<footer>
Proyecto Final - Taller de Sistemas Operativos
</footer>
</body>
</html>
