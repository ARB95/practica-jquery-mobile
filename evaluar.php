<?php
    
    require_once 'php/DB.php';

    // Recuperamos la información de la sesión
    session_start();
    // Y comprobamos que el usuario se haya autentificado, para evitar que puedan acceder directamente
    //a esta pagina sin pasar por el login
		if (!isset($_SESSION['usuario'])) 
		{
			?>
			<script>
			window.location.replace("login.php");
			</script>
			
			<?php
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>App Notas - Evaluar alumno</title>

	<?php require_once 'php/plantilla/head.php'; ?>
	
</head>

<body>

<div data-role="page" >

	<div data-role="header" data-position="fixed">
		<h1>App Notas - Evaluar alumno</h1>
		<div class="ui-btn-right">
			<span title="Cerrar sesión"  data-rel="dialog" data-transition="fade">Usuario: <?php echo $_SESSION['usuario']; ?></span>
			<a title="Cierra la sesión" class=" ui-btn ui-shadow ui-btn-corner-all  ui-btn-up" href="logoff.php">Cerrar sesión</a>
		</div>
		<form class="ui-btn-left ui-mini" method="post" action="alumno.php">
				<input title="Cancelar y volver a la selección de alumno" type="submit" name="cancelar" id="cancelar" value="Cancelar" data-clear-btn="true"/>
		</form>
	</div><!-- /header -->

	<div data-role="main" class="ui-content">
		<form class="ui-mini" method="post" action="alumno.php" data-ajax="false">
		
			<fieldset data-role="collapsible">
				<legend>Contenido del proyecto</legend>
				<label for="planteamiento">Text Input:</label>
				<input name="planteamiento" id="planteamiento" value="" type="text">
				<div data-role="controlgroup">
					<input name="checkbox-1-a" id="checkbox-1-a" type="checkbox">
					<label for="checkbox-1-a">One</label>
					<input name="checkbox-2-a" id="checkbox-2-a" type="checkbox">
					<label for="checkbox-2-a">Two</label>
					<input name="checkbox-3-a" id="checkbox-3-a" type="checkbox">
					<label for="checkbox-3-a">Three</label>
				</div>
			</fieldset>
			
			<fieldset data-role="collapsible">
				<legend>Calidad de la presentación</legend>
				<label for="planteamiento">Text Input:</label>
				<input name="planteamiento" id="planteamiento" value="" type="text">
				<div data-role="controlgroup">
					<input name="checkbox-1-b" id="checkbox-1-b" type="checkbox">
					<label for="checkbox-1-b">One</label>
					<input name="checkbox-2-b" id="checkbox-2-b" type="checkbox">
					<label for="checkbox-2-b">Two</label>
					<input name="checkbox-3-b" id="checkbox-3-b" type="checkbox">
					<label for="checkbox-3-b">Three</label>
				</div>
			</fieldset>
			
			<fieldset data-role="collapsible">
				<legend>Expresión oral</legend>
				<label for="planteamiento">Text Input:</label>
				<input name="planteamiento" id="planteamiento" value="" type="text">
				<div data-role="controlgroup">
					<input name="checkbox-1-c" id="checkbox-1-c" type="checkbox">
					<label for="checkbox-1-c">One</label>
					<input name="checkbox-2-c" id="checkbox-2-c" type="checkbox">
					<label for="checkbox-2-c">Two</label>
					<input name="checkbox-3-c" id="checkbox-3-c" type="checkbox">
					<label for="checkbox-3-c">Three</label>
				</div>
			</fieldset>
	
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