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
				<a href="clienteUsuario.php">Más Recientes</a>
				<a href="../../login.php">Cerrar sesión</a>
			</nav>
		</div>
	</header>
    <center><br>
        <?php
        //crear la vista para mostrar todos los registros de la tabla 
        //categoria
        //consumir el APIl_Restful
        $endpoint = "http://127.0.0.1/google/api_restful/controllers/Usuario.php?op=selectall";
        $datos = json_decode(file_get_contents($endpoint), true);
        ?>
            <div class="container">
                        <div style="display: inline-flex;">
                            <h1 class="edit1">Lista de Peliculas</h1>
                            <a class="btn btn-success" style="margin-left: 30px; background-color: #E79D2D; border-color: #E79D2D; margin-bottom: 20px; color:white;" id="btnRegister" href="nuevoUsuario.php">Nueva película</a>
                        </div>
                            <div id="main-container">
                                <table id="mytableID" class="table table-striped sampleTable table--responsive" cellspacing="0" width="100%" style="background-color:rgb(255,255,255,0.6); margin-right: 50px; margin-left:50px;">
                                    <thead>
                                        <tr>
                                            <th>Folio</th>
                                            <th>Nombre</th>
                                            <th>Fecha</th>
                                            <th>Duración</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <tr>
                                            <?php
                                            for ($i = 0; $i < count($datos); $i++) {
                                            ?>
                                                <td><?php echo $datos[$i]["id"] ?></td>
                                                <td><?php echo $datos[$i]["nombre"] ?></td>
                                                <td><?php echo $datos[$i]["fecha"] ?></td>
                                                <td><?php echo $datos[$i]["duracion"] ?></td>
                                                <td><a class='botones' href='actualizarUsuario.php?id=<?php echo $datos[$i]["id"] ?>"'><i class="fa fa-pen"></i></a>
                                                    <a class='botones1' href="eliminarUsuario.php?id=<?php echo $datos[$i]["id"] ?>"><i class="fa fa-trash"></i></a>
                                                </td>
                                        </tr>
                                    </tbody>
                                    <tfoot></tfoot>
                            </div>

                        <?php
                                            }
                        ?>
            </div>
    </center>
    <script>
        $(document).ready(function() {

            $(".sampleTable").fancyTable({
                /* Column number for initial sorting*/
                sortColumn: 1,
                /* Setting pagination or enabling */
                pagination: true,
                /* Rows per page kept for display */
                perPage: 20,
                globalSearch: true
            });

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

        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.fancytable/dist/fancyTable.min.js"></script>

</body>

</html>