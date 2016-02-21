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
		<form class="ui-btn-left" method="post" action="alumno.php">
				<input title="Cancelar y volver a la selección de alumno" type="submit" name="cancelar" id="cancelar" value="Cancelar" data-clear-btn="true"/>
		</form>
	</div><!-- /header -->

	<div data-role="main" class="ui-content">
		<form class="ui-mini" method="post" action="alumno.php" data-ajax="false">
		
			<fieldset data-role="collapsible">
				<legend title="Contenido del proyecto - 65% de la nota">Contenido del proyecto - 65%</legend>
				
				<label title="Objetivos, Recursos utilizados, Destinatarios, Justificación del proyecto" for="planteamiento">Planteamiento:</label>
				<input name="planteamiento" id="planteamiento" value="5" min="0" max="10" data-highlight="true" type="range" title="Objetivos, Recursos utilizados, Destinatarios, Justificación del proyecto" class="contenido"/>
				
				<label title="Metodología seguida, Claridad, Actividades o acciones realizadas, Documentación elaborada" for="contenido">Contenido:</label>
				<input name="contenido" id="contenido" value="5" min="0" max="10" data-highlight="true" type="range" title="Metodología seguida, Claridad, Actividades o acciones realizadas, Documentación elaborada" class="contenido"/>
				
				<label title="Conclusiones, Objetivos conseguidos y grado de consecución" for="resultados">Resultados obtenidos:</label>
				<input name="resultados" id="resultados" value="5" min="0" max="10" data-highlight="true" type="range" title="Conclusiones, Objetivos conseguidos y grado de consecución" class="contenido"/>
				
				<hr/>
				<label id="totalContenido">Total: xx</label>
				
			</fieldset>
			
			<fieldset data-role="collapsible">
				<legend title="Calidad de la presentación - 10% de la nota">Calidad de la presentación - 10%</legend>
				
				<label title="Presentación escrita" for="presentacion">Presentación escrita:</label>
				<input name="presentacion" id="presentacion" value="5" min="0" max="10" data-highlight="true" type="range" title="Presentación escrita" class="contenido"/>
				
				<label title="Redacción y claridad del texto" for="redaccion">Redacción y claridad del texto:</label>
				<input name="redaccion" id="redaccion" value="5" min="0" max="10" data-highlight="true" type="range" title="Redacción y claridad del texto" class="contenido"/>
				
				<label title="Organización del contenido" for="organizacion">Organización del contenido:</label>
				<input name="organizacion" id="organizacion" value="5" min="0" max="10" data-highlight="true" type="range" title="Organización del contenido" class="contenido"/>
				
				<hr/>
				<label id="totalPlanteamiento">Total: xx</label>
				
			</fieldset>
			
			<fieldset data-role="collapsible">
				<legend title="Expresión oral - 25% de la nota">Expresión oral - 25%</legend>
				
				<label title="¿Entrada correcta?" for="entrada">Entrada del alumno:</label>
				<select  name="entrada" id="entrada" data-role="slider" class="expresion" title="¿Entrada correcta?">
					<option value="10">Bien</option>
					<option value="0">Mal</option>
				</select>
				
				<label title="¿Indumentaria correcta?" id="entrada">Indumentaria</label>
				<select  name="entrada" id="entrada" data-role="slider" class="expresion" title="¿Indumentaria correcta?">
					<option value="10">Bien</option>
					<option value="0">Mal</option>
				</select>
				
				<label title="¿Es atractiva? ¿Queda claro el proyecto?" for="intro">Introducción:</label>
				<input name="intro" id="intro" value="5" min="0" max="10" data-highlight="true" type="range" title="¿Es atractiva? ¿Queda claro el proyecto?" class="expresion"/>
				
				<label title="Orden en las ideas. Claridad en la exposición. Aclaración de términos técnicos" for="desarrollo">Desarrollo:</label>
				<input name="desarrollo" id="desarrollo" value="5" min="0" max="10" data-highlight="true" type="range" title="Orden en las ideas. Claridad en la exposición. Aclaración de términos técnicos" class="expresion"/>
				
				<label title="¿Queda claro el objetivo del proyecto? ¿Lo vende bien?" for="conclusion">Conclusión:</label>
				<input name="conclusion" id="conclusion" value="5" min="0" max="10" data-highlight="true" type="range" title="¿Queda claro el objetivo del proyecto? ¿Lo vende bien?" class="expresion"/>
				
				<label title="Seguridad en lo que expone. ¿La presentación está trabajada?" for="seguridad">Seguridad:</label>
				<input name="seguridad" id="seguridad" value="5" min="0" max="10" data-highlight="true" type="range" title="Seguridad en lo que expone. ¿La presentación está trabajada?" class="expresion"/>
				
				<label title="Pone entusiasmo en lo que expone" for="entusiasmo">Entusiasmo:</label>
				<select  name="entrada" id="entrada" data-role="slider" class="expresion" title="Pone entusiasmo en lo que expone">
					<option value="10">Sí</option>
					<option value="0">No</option>
				</select>
				
				<label title="Entonación, Volumen, Velocidad, Vacilación en la voz, Pausas, Utilización de muletillas..." for="seguridad">Expresión oral:</label>
				<input name="oral" id="oral" value="5" min="0" max="10" data-highlight="true" type="range" title="Entonación, Volumen, Velocidad, Vacilación en la voz, Pausas, Utilización de muletillas..." class="expresion"/>
				
				<label title="¿Se adecua a lo estipulado?" for="duracion">Duración:</label>
				<select  name="duracion" id="duracion" data-role="slider" class="expresion" title="¿Se adecua a lo estipulado?">
					<option value="10">Sí</option>
					<option value="0">No</option>
				</select>
				
				<fieldset data-role="controlgroup">
					<legend>Expresión no verbal:</legend>
					
					<input name="mirada" id="mirada" type="checkbox" value="2.5" class="expresion" title="¿dirige la mirada a todo el auditorio?"/>
					<label for="mirada" title="¿dirige la mirada a todo el auditorio?">Mirada</label>
					
					<input name="facial" id="facial" type="checkbox" value="2.5" class="expresion" title="Sonrisa/expresión facial positiva"/>
					<label for="facial" title="Sonrisa/expresión facial positiva">Expresión facial</label>
					
					<input name="posicion" id="posicion" type="checkbox" value="2.5" class="expresion" title="Posición correcta del cuerpo"/>
					<label for="posicion" title="Posición correcta del cuerpo">Posición corporal</label>
					
					<input name="tics" id="tics" type="checkbox" value="2.5" class="expresion" title="Tics, gestos nerviosos"/>
					<label for="tics" title="Tics, gestos nerviosos">Tics</label>
					
				</fieldset>
				
				<label title="¿Logra atraer la atención del público?" for="atencion">Atención del público:</label>
				<select  name="atencion" id="atencion" data-role="slider" class="expresion" title="¿Logra atraer la atención del público?">
					<option value="10">Sí</option>
					<option value="0">No</option>
				</select>
				
				<label title="¿Responde de forma coherente?" for="preguntas">Preguntas realizadas:</label>
				<select  name="preguntas" id="preguntas" data-role="slider" class="expresion" title="¿Responde de forma coherente?">
					<option value="10">Sí</option>
					<option value="0">No</option>
				</select>
				
				
				<hr/>
				<label id="totalExpresion">Total: xx</label>
				
			</fieldset>
	
			<div class="ui-field-contain">
				<input type="submit" name="evaluar" id="evaluar" value="Evaluar" data-clear-btn="true"/>
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