<!DOCTYPE html>
<html>
<head>
	<title>project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="fonts.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="assets/js/main.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/skeleton.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/icons.css">

</head>

<body class="bg-body">
	<div class="sixteen columns bg-second mh-100">
		<header>
			<div class="menu_bar">
				<a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
			</div>
	 
			<nav>
				<ul>
					<li><a href="#"><span class="icon-house"></span>Inicio</a></li>
					<li><a href="#"><span class="icon-suitcase"></span>Trabajos</a></li>
					<li class="submenu">
						<a href="#"><span class="icon-rocket"></span>Proyectos<span class="caret icon-arrow-down6"></span></a>
						<ul class="children">
							<li><a href="#">SubElemento #1 <span class="icon-dot"></span></a></li>
							<li><a href="#">SubElemento #2 <span class="icon-dot"></span></a></li>
							<li><a href="#">SubElemento #3 <span class="icon-dot"></span></a></li>
						</ul>
					</li>
					<li><a href="#"><span class="icon-earth"></span>Servicios</a></li>
					<li><a href="#"><span class="icon-mail"></span>Contacto</a></li>
				</ul>
			</nav>
		</header>
	</div>
	<div class="sixteen columns bg-third mh-50"></div>
	<div class="sixteen columns bg-first">
		<div class="container">
			<div class="sixteen columns bg-dark mh-500"></div>
			<div class="one-third column sec-turq mh-250 mg"></div>
			<div class="one-third column sec-med mh-250 mg"></div>
			<div class="one-third column sec-turq mh-250 mg"></div>
		</div>
	</div>
		<div class="row"></div>
		<div class="row"></div>

	<div class="container">
		<div class="sixteen columns mh-50">
			<h3 class="font-title">lo ultimo</h3>
		</div>
		<div class="five columns bg-fifth mh-200">
			<h2 class="font-title Ml-black">Spotify Lite llega a México y promete usar un menor espacio, controlar los datos móviles y consumir menos de batería</h2>
			<p class="Ml-black" style="font-size: 16px">Ya sea que tengas datos limitados, poco almacenamiento o poca batería, esta app te solucionará muchos de esos problemas.</p>
		</div>
		<div class="five columns bg-third mh-200">
			<img src="imagenes/prueba.jpg">
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(main);
 
var contador = 1;
 
function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
 
	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}
</script>