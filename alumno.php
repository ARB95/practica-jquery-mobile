<?php
    
    require_once 'php/DB.php';

    // Recuperamos la información de la sesión
    session_start();
    // Y comprobamos que el usuario se haya autentificado, para evitar que puedan acceder directamente
    //a esta pagina sin pasar por el login
    if (!isset($_SESSION['usuario'])) 
        header("Location: login.php");
    
    
    
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>App Notas - Selección de alumno</title>

	<?php require_once 'php/plantilla/head.php'; ?>
	
</head>

<body>

<div data-role="page" >

	<div data-role="header">
		<h1>App Notas - Selección de alumno</h1>
		<div class="ui-btn-right">
			<span title="Cambiar tema"  data-rel="dialog" data-transition="fade">Usuario: <?php echo $_SESSION['usuario']; ?></span>
			<a title="Default" class=" ui-btn ui-shadow ui-btn-corner-all  ui-btn-up" href="logoff.php">Cerrar sesión</a>
		</div>
	</div><!-- /header -->

	<div data-role="main" class="ui-content">
		<form class="ui-mini" method="post" action="alumno.php">
		
			<h2>Elige curso y alumno:</h2>
			<?php
				if (isset($error)) echo "<h4 style='color:red'>$error</h4>";
			?>
			
			<div class="ui-field-contain">
				<label for="curso">Curso:</label>
				<input type="text" name="curso" id="curso" value="" data-clear-btn="true"/>
			</div>
			<div class="ui-field-contain">
				<label for="alumno">Contraseña:</label>
				<input type="text" name="alumno" id="alumno" value="" data-clear-btn="true"/>
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