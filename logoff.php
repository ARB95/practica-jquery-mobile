<?php

    session_start();
    
    // Eliminamos la sesion
    session_destroy();
    

?>
<!DOCTYPE html>
<html>
<head>
	<title>App Notas - Logoff</title>

	<?php require_once 'php/plantilla/head.php'; ?>
	
</head>

<body>

<div data-role="page" >

	<div data-role="header">
		<h1>App Notas - Logoff</h1>
		
	</div><!-- /header -->

	<div data-role="main" class="ui-content">
		<form class="ui-mini" method="post" action="login.php">
		
			<h2>Has cerrado sesión. <a href="login.php">VOLVER</a></h2>
		
	</div><!-- /content -->
	
	<?php require_once 'php/plantilla/footer.php'; ?>
	
</div><!-- /page -->

	<script src="js/jquery-1.11.1.min.js"></script> 
	<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/temas.js"></script>
	
</body>
</html>
