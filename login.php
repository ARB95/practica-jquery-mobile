<?php

require_once('php/DB.php');

session_start();

if(isset($_SESSION['usuario'])) {
	?>
		<script>
			window.location.replace("alumno.php");
		</script>
			
	<?php
}

if (filter_input(INPUT_POST, "acceder")) {
        
        $usuario =  filter_input(INPUT_POST, "usuario");
        $pass = filter_input(INPUT_POST, "pass");
        
        if ((empty($usuario)) || (empty($pass))) 
            $error = 'Debes introducir un nombre de usuario y una contraseña';
        else {
            // Comprobamos las credenciales con la base de datos
            if (DB::verificaCliente($usuario, $pass)) {
                $_SESSION['usuario'] = $usuario;
				header("Location: http://localhost/practica-jquery-mobile/alumno.php");
            }
            else {
                // Si las credenciales no son válidas, se vuelven a pedir
                $error = '¡Usuario o contraseña no válidos!';
            }
        }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>App Notas - Login</title>

	<?php require_once 'php/plantilla/head.php'; ?>
	
</head>

<body>

<div data-role="page" >

	<div data-role="header">
		<h1>App Notas - Login</h1>
		
	</div><!-- /header -->

	<div data-role="main" class="ui-content">
		<form class="ui-mini" method="post" action="login.php"  data-ajax="false">
		
			<h2>Introduce usuario y contraseña:</h2>
			<?php
				if (isset($error)) echo "<h4 style='color:red'>$error</h4>";
			?>
			
			<div class="ui-field-contain">
				<label for="usuario">Usuario:</label>
				<input type="text" name="usuario" id="usuario" placeholder="Usuario..." value="" data-clear-btn="true"/>
			</div>
			<div class="ui-field-contain">
				<label for="pass">Contraseña:</label>
				<input type="password" name="pass" id="pass" placeholder="Contraseña..." value="" data-clear-btn="true"/>
			</div>
			<div class="ui-field-contain">
				<input type="submit" name="acceder" id="acceder" value="Acceder" data-clear-btn="true"/>
			</div>
			
		</form>
		
	</div><!-- /content -->
	
	<?php require_once 'php/plantilla/footer.php'; ?>
	
</div><!-- /page -->

	<script src="js/jquery-1.11.1.min.js"></script> 
	<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/temas.js"></script>
	
</body>
</html>