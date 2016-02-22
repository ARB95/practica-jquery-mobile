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

	<div data-role="header" data-position="fixed" >
		<h1>App Notas - Evaluar alumno</h1>
		<br/>
		<div class="ui-btn-right">
			<span title="Cerrar sesión"  data-rel="dialog" data-transition="fade">Usuario: <?php echo $_SESSION['usuario']; ?></span>
			<br/>
			<a title="Cierra la sesión" class=" ui-btn ui-shadow ui-btn-corner-all  ui-btn-up" href="logoff.php">Cerrar sesión</a>
		</div>
	</div><!-- /header -->

	<div data-role="main" class="ui-content">
	
		<h2>Alumno: <?php echo $_SESSION['alumno']; ?> / Curso: <?php echo $_SESSION['curso'] ?></h2>
		<h2>Nota: <?php echo filter_input(INPUT_POST, "nota"); ?> </h2>
		<hr/>
		<label>La nota ha sido guardada. <a href="alumno.php">Calificar otro alumno</a>.</label>

	</div><!-- /content -->
	
	<?php require_once 'php/plantilla/footer.php'; ?>
	
</div><!-- /page -->

	<script src="js/jquery-1.11.1.min.js"></script> 
	<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/temas.js"></script>
	
</body>
</html>
