<?php

require_once('php/DB.php');

session_start();

//if(isset($_SESSION)) header("Location: producto.php");

if (filter_input(INPUT_POST, "acceder")) {
        
        $usuario =  filter_input(INPUT_POST, "usuario");
        $pass = filter_input(INPUT_POST, "pass");
        
        if ((empty($usuario)) || (empty($pass))) 
            $error = 'Debes introducir un nombre de usuario y una contraseña';
        else {
            // Comprobamos las credenciales con la base de datos
            if (DB::verificaCliente($usuario, $pass)) {
                $_SESSION['usuario'] = $usuario;
				header("Location: prueba.html");                    
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

	<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">

	<!--link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css"-->
	<link rel="stylesheet" href="jquery.mobile-1.4.5/themes/temas.css" />
	<link rel="stylesheet" href="jquery.mobile-1.4.5/themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<script>
		$( document ).on( "pagecreate", function() {
			$("body, body > div").removeClass("ui-page-theme-a ui-page-theme-b ui-page-theme-c ui-page-theme-d");
			$("body, body > div").removeClass("ui-overlay-a");
		});
	</script>
</head>

<body>

<div data-role="page" >

	<div data-role="header">
		<h1>App Notas - Login</h1>
		
	</div><!-- /header -->

	<div data-role="main" class="ui-content">
		<form class="ui-mini" method="post" action="login.php">
		
			<h2>Introduce usuario y contraseña:</h2>
			<?php
				if (isset($error)) echo "<h4 style='color:red'>$error</h4>";
			?>
			
			<div class="ui-field-contain">
				<label for="usuario">Usuario:</label>
				<input type="text" name="usuario" id="usuario" value="" data-clear-btn="true"/>
			</div>
			<div class="ui-field-contain">
				<label for="pass">Contraseña:</label>
				<input type="password" name="pass" id="pass" value="" data-clear-btn="true"/>
			</div>
			<div class="ui-field-contain">
				<input type="submit" name="acceder" id="acceder" value="Acceder" class=".cambiaTema" data-clear-btn="true"/>
			</div>
			
		</form>
		
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Practica jQueryMobile App Notas</h4>
		<div class="ui-btn-right">
			<span title="Cambiar tema"  data-rel="dialog" data-transition="fade">Cambiar tema</span>
			<a title="Savior" class=" ui-btn ui-shadow ui-btn-corner-all  ui-btn-up cambiaTema" value="a">A</a>
			<a title="Verde" class=" ui-btn ui-shadow ui-btn-corner-all  ui-btn-up cambiaTema" value="b">B</a>
			<a title="Azul" class=" ui-btn ui-shadow ui-btn-corner-all  ui-btn-up cambiaTema" value="c">C</a>
			<a title="Default" class=" ui-btn ui-shadow ui-btn-corner-all  ui-btn-up cambiaTema" value="d">D</a>
		</div>
	</div><!-- /footer -->
</div><!-- /page -->

	<script src="js/jquery-1.11.1.min.js"></script> 
	<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/temas.js"></script>
	
</body>
</html>