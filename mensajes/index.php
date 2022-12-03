
<!DOCTYPE html>
<html>
<head>
	<title>Twilio</title>
	<link rel="stylesheet" href="estilos.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Dejanos tus comentarios!</h2>
				<h4>Ingresa tus datos </h4>
			</div>
		</div>
		<div class="col-md-9">
		<form action="send.php" method="POST">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Nombre:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Ingrese tu nombre" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Apellidos:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Ingrese tu apellido" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="number">Telefono:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="number" placeholder="Ingresa tu numero telefonico" name="number">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="message">Mensaje:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" name="message" id="message"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="submit" class="btn btn-default">Enviar</button>
				  </div>
				</div>
			</div>
        </form>
		<?php
		if(isset($_GET['sent'])) {
			echo "<script>
			alert('Mensaje enviado');
		</script>";
		}
	?>
		</div>
	</div>
</div>




	
	
</body>
</html>