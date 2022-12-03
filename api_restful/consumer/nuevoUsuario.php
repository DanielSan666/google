<?php 
    require_once('../config/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<script type="text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v15.0&appId=908689966758869&autoLogAppEvents=1" nonce="IPeodJB7"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
	</script>
	<title>Monopoli Studios</title>
</head>
<body>
<header>
		<div class="contenedor">
			<h2 class="logotipo">Monopoli Studios</h2>
			<nav>
				<a href="../../index.php">Inicio</a>
				<a href="../../planes.php">Planes</a>
				<a href="../../ubicacion.php">Ubicacion</a>
				<a href="clienteUsuario.php">Más Recientes</aduracion>
				<a href="../../login.php">Cerrar sesión</a>
			</nav>
		</div>
	</header>
    <center>
    <a href="clienteUsuario.php" class="btn-ad">administrar</a>
    <br>
        
            <br>
            <h1 class="edit1">Nueva Pelicula</h1>

            <table>
            <form action="insertar.php" method="post">
                <input type="hidden" value="">
                <tr hidden>
                    <td><label for="id">Folio: </label></td>
                    <td><input type="disabled" placeholder="Folio" name="id"></td>
                </tr>
                <tr>
                    <td><label for="nombre">Nombre: </label></td>
                    <td><input type="text" placeholder="Nombre de la película" name="nombre"></td>
                </tr>
                <tr>
                    <td><label for="fecha">Fecha: </label></td>
                    <td><input type="date" placeholder="Fecha" name="fecha"></td>
                </tr>
                <tr>
                    <td><label for="duracion">Duración: </label></td>
                    <td><input type="text" placeholder="Duración" name="duracion"></td>
                </tr>
                <tr>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Enviar" class="btn btn-default" style="color:white; margin-bottom: 10px; background: #4e88cf"></td>
                    <td><input type="reset" value="Borrar" class="btn btn-default" style="color:white; margin-bottom: 10px; background: #cf4e4e"></td>
                </tr>
        </table>

    </center>
    <script>
        // ---------Responsive-navbar-active-animation-----------
        function test() {
            var tabsNewAnim = $('#navbarSupportedContent');
            var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
            var activeItemNewAnim = tabsNewAnim.find('.active');
            var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
            var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
            var itemPosNewAnimTop = activeItemNewAnim.position();
            var itemPosNewAnimLeft = activeItemNewAnim.position();
            $(".hori-selector").css({
                "top": itemPosNewAnimTop.top + "px",
                "left": itemPosNewAnimLeft.left + "px",
                "height": activeWidthNewAnimHeight + "px",
                "width": activeWidthNewAnimWidth + "px"
            });
            $("#navbarSupportedContent").on("click", "li", function(e) {
                $('#navbarSupportedContent ul li').removeClass("active");
                $(this).addClass('active');
                var activeWidthNewAnimHeight = $(this).innerHeight();
                var activeWidthNewAnimWidth = $(this).innerWidth();
                var itemPosNewAnimTop = $(this).position();
                var itemPosNewAnimLeft = $(this).position();
                $(".hori-selector").css({
                    "top": itemPosNewAnimTop.top + "px",
                    "left": itemPosNewAnimLeft.left + "px",
                    "height": activeWidthNewAnimHeight + "px",
                    "width": activeWidthNewAnimWidth + "px"
                });
            });
        }
        $(document).ready(function() {
            setTimeout(function() {
                test();
            });
        });
        $(window).on('resize', function() {
            setTimeout(function() {
                test();
            }, 500);
        });
        $(".navbar-toggler").click(function() {
            $(".navbar-collapse").slideToggle(300);
            setTimeout(function() {
                test();
            });
        });



        // --------------add active class-on another-page move----------
        jQuery(document).ready(function($) {
            // Get current path and find target link
            var path = window.location.pathname.split("/").pop();

            // Account for home page with empty path
            if (path == '') {
                path = 'index.html';
            }

            var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
            // Add active class to target link
            target.parent().addClass('active');
        });

        // Add active class on another page linked
        // ==========================================
        $(window).on('load', function() {
            var current = location.pathname;
            console.log(current);
            $('#navbarSupportedContent ul li a').each(function() {
                var $this = $(this);
                // if the current path is like this link, make it active
                if ($this.attr('href').indexOf(current) !== -1) {
                    $this.parent().addClass('active');
                    $this.parents('.menu-submenu').addClass('show-dropdown');
                    $this.parents('.menu-submenu').parent().addClass('active');
                } else {
                    $this.parent().removeClass('active');
                }
            })
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.fancytable/dist/fancyTable.min.js"></script>

</body>

</html>