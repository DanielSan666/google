<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<script type="text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v15.0&appId=908689966758869&autoLogAppEvents=1" nonce="IPeodJB7"></script>
	
	</script>
	<title>Monopoli Studios</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">Monopoli Studios</h2>
			<nav>
				<a href="index.php" class="activo">Inicio</a>
				<a href="planes.php">Planes</a>
				<a href="ubicacion.php">Ubicacion</a>
				<a href="api_restful/consumer/clienteUsuario.php">Más Recientes</a>
				<a href="mensajes/index.php">Deja tu mensaje</a>
				<a href="login.php" class="btn btn-primary">Cerrar sesión</a>
			</nav>
		</div>
	</header>

	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">Interestellar</h3>
				<p class="descripcion">
					Narra las aventuras de un grupo de exploradores que hacen uso de un agujero de gusano recientemente descubierto para superar las limitaciones de los viajes espaciales tripulados y vencer las inmensas distancias que tiene un viaje interestelar.
				</p>
				<button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
			</div>
		</div>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Películas Recomendadas</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="#"><img src="img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/4.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/7.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/4.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/7.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/4.png" alt=""></a>
						</div>
					</div>
				</div>

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Añadidas Recientemente</h3> <button id="btn1"> Ocultar Sección </button>
			</div>

			<br>
			<br>
		<div id="contenido">
			<div class="grid-1">
				<div><img src="img/img/1.png"></div>
				<div><img src="img/img/2.png"></div>
				<div><img src="img/img/3.png"></div>
				<div><img src="img/img/4.png"></div>
				<div><img src="img/img/5.png"></div>
				<div><img src="img/img/6.png"></div>
				<div><img src="img/img/7.png"></div>
				<div><img src="img/img/8.gif"></div>
				<div><img src="img/img/9.png"></div>
				<div><img src="img/img/10.png"></div>
				<div><img src="img/img/11.png"></div>
				<div><img src="img/img/12.png"></div>
				<div><img src="img/img/13.png"></div>
				<div><img src="img/img/14.png"></div>
				<div><img src="img/img/15.png"></div>
				<div><img src="img/img/16.png"></div>
				<div><img src="img/img/17.png"></div>
				<div><img src="img/img/18.png"></div>
			</div>
		</div>
		</div>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Página de facebook</h3> <button id="btn2"> Ocultar Sección </button>
			</div>
			<br>
			<br>
			<div id="contenido2">
				<div class="align" align="center">
					<div class="image">
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0" nonce="uchPpkc2"></script>
						<div class="fb-page" data-href="https://www.facebook.com/peliculas-158776747522614" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/peliculas-158776747522614" class="fb-xfbml-parse-ignore">
						<a href="https://www.facebook.com/peliculas-158776747522614">peliculas</a>
						</blockquote></div>
					</div>
				</div>
			</div>
		</div>
		<script>
		//Ocultar Sección 1
		$("#btn1").click(function() {
            $("#contenido").toggle(1500);

            }, function(){
                $("#contenido").toggle(1500);
            });
		//Ocultar Sección 2
		$("#btn2").click(function() {
            $("#contenido2").toggle(1500);

            }, function(){
                $("#contenido2").toggle(1500);
            });
	</script>
	</main>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>