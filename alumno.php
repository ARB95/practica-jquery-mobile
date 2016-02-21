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
	<title>App Notas - Selección de alumno</title>

	<?php require_once 'php/plantilla/head.php'; ?>
	
</head>

<body>

<div data-role="page" >

	<div data-role="header" data-position="fixed">
		<h1>App Notas - Selección de alumno <?php echo $_SERVER["REMOTE_ADDR"];?></h1>
		<div class="ui-btn-right">
			<span title="Cerrar sesión"  data-rel="dialog" data-transition="fade">Usuario: <?php echo $_SESSION['usuario']; ?></span>
			<a title="Cierra la sesión" class=" ui-btn ui-shadow ui-btn-corner-all  ui-btn-up" href="logoff.php">Cerrar sesión</a>
		</div>
	</div><!-- /header -->

	<div data-role="main" class="ui-content">
		<form class="ui-mini" method="post" action="evaluar.php" data-ajax="false">
		
			<h2>Elige curso y alumno:</h2>
			<?php
				if (isset($error)) echo "<h4 style='color:red'>$error</h4>";
			?>
			<div class="ui-field-contain">		
				<label for="curso" class="select">Curso:</label>
				<select name="curso" id="curso" data-native-menu="false">
					<option>Elige un curso...</option>
					<option value="dam">DAM</option>
					<option value="daw">DAW</option>
					<option value="asir">ASIR</option>
				</select>
			</div>
			<div class="ui-field-contain">
				<label for="alumno" class="select">Alumno:</label>
				<select name="alumno" id="alumno" data-native-menu="false">
					<option>Elige un alumno...</option>
					<option value="dam">Pepe</option>
					<option value="daw">Juan</option>
					<option value="asir">María</option>
				</select>
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