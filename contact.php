<?php
require 'conexion.php';
if (isset($_POST['btn'])) {
	$sql = "INSERT INTO tarea (nombre , direccion, email, mensaje) VALUES (:nombre , :direccion, :email, :mensaje)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':nombre', $_POST['nombre']);
	$stmt->bindParam(':direccion', $_POST['direccion']);
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':mensaje', $_POST['mensaje']);

	try {
		$stmt->execute();
	  //die('Successfully created new user');
	} catch(exception $e) {
	  die ('Sorry there must have been an issue creating your account');
	}
  }

?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CONTACTO</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="navigation">
				<span id="mobile-navigation">&nbsp;</span>
				<a href="index.php" class="logo"><img src="images/CODIGO_LOGO.jpg" alt=""></a>
				<ul id="menu">
					<li>
						<a href="index.php">INICIO</a>
					</li>
					<li>
						<a href="about.php">LA INSTITUCION</a>
					</li>
					<li>
						<a href="running.php">SERVICIOS</a>
						<ul>
							<li>
								<a href="runningsinglepost.php">SERVICIOS1</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="blog.php">NIVELES</a>
						<ul>
							<li>
								<a href="blogsinglepost.php">NIVELES_IMAGENES</a>
							</li>
						</ul>
					</li>
					<li class="selected">
						<a href="contact.php">CONTACTO</a>
						<ul>


					</li>
				</ul>
			</div>
		</div>
		<div id="body" class="contact">
			<div>
				<h1>NUESTRA DIRECCION</h1>
				<img src="images/CODIGO_DIRECCION.png" alt="">
				<h2>UBIQUENOS EN:</h2>
				<p>Jr. Santos Chocano N° 495- Referencia --> a una cuadra de supermercado Metro </p>
				<h2>TELEFONOS</h2> 
				<a href="#">927326400 O 928170852</a>
				<h2>Email</h2>
				<a href="#">lianjsp@gmail.com</a>
				<h4>ÚNASE A CÓDIGO AHORA</h4>
				<form action="contact.php" method="POST">
				
				<!--<P>LOGIN PARA EL PADRE </P>
				<label for="nombre">INGRESE SU NOMBRE:</label1></br>
				<input type="text" name="nombre" id="nombre" size="50" maxlength="5">
				<label for="nombre">INGRESE SU CONTRASEÑA:</label1></br>
				<input type="contraseña" name="contraseña" id="contraseña" size="50" maxlength="5">
				<button id="btn" name="btn" type="submit" value="Enviar" >ENVIAR</button>
				</form>
				<P>LOGIN PARA EL DOCENTE</P>
				<label for="nombre">INGRESE SU NOMBRE:</label1></br>
				<input type="text" name="nombre" id="nombre" size="50" maxlength="5">
				<label for="nombre">INGRESE SU CONTRASEÑA:</label1></br>
				<input type="contraseña" name="contraseña" id="contraseña" size="50" maxlength="5">
				<button id="btn" name="btn" type="submit" value="Enviar" >ENVIAR</button>
				</form>
				-->
		     
				
					<input type="text" name="nombre" value="Nombre" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
					<input type="text" name="direccion" value="Direccion" onblur="this.value=!this.value?'Address':this.value;" onfocus="this.select()" onclick="this.value='';">
					<input type="text" name="email" value="Correo elctronico" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
					<input type="text" name="mensaje" value="Mensaje" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">

					<button id="btn" name="btn" type="submit" value="Enviar" >ENVIAR</button>
				

				
				</form>
			</div>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					
					<a href="https://www.facebook.com/codigo.sotomatos.5" class="facebook">facebook</a>
					
					
				</div>
				<p>&copy;Código. Todos los derechos son reservados.</p>
			</div>
		</div>
	</div>
</body>
</html>
