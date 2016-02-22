$(document).ready(function() {
	
	function calcularContenido()
	{
		var total = 0;
		var numNotas = 0;

		$(".contenido").each(function(index, elem) {
			numNotas++;	   		 
			total +=  parseFloat($(this).val());
		});
		
		total = total/numNotas;

		var totalRedondeado = Math.round(total * 100) / 100;

		$("#totalContenido").html("Total: " + totalRedondeado);
		$("#totalContenido").val(total);

		calcularTotal();	
	}

	function calcularPlanteamiento()
	{
		var total = 0;
		var numNotas = 0;

		$(".planteamiento").each(function(index, elem) {
			numNotas++;	   		 
			total +=  parseFloat($(this).val());
		});
		
		total = total/numNotas;

		var totalRedondeado = Math.round(total * 100) / 100;

		$("#totalPlanteamiento").html("Total: " + totalRedondeado);
		$("#totalPlanteamiento").val(total);

		calcularTotal();	
	}

	function calcularExpresion()
	{
		var total = 0;
		var numNotas = 0;

		$(".expresion").each(function(index, elem) {
			numNotas++;	   		 
			if($(this).attr("data-cacheval")=="false" || $(this).attr("type")!="checkbox" )			
			total +=  parseFloat($(this).val());
		});
		
		numNotas-=3;//Restamos los checkbox de expresion no verbal
		
		total = total/numNotas;
		
		var totalRedondeado = Math.round(total * 100) / 100;

		$("#totalExpresion").html("Total: " + totalRedondeado);	
		$("#totalExpresion").val(total);

		calcularTotal();	
	}

	function calcularTotal()
	{
		var contenido = parseFloat($("#totalContenido").val()) * 0.65;
		var planteamiento = parseFloat($("#totalPlanteamiento").val()) * 0.1;
		var expresion = parseFloat($("#totalExpresion").val()) * 0.25;

		var total = contenido + planteamiento + expresion;
		
		var totalRedondeado = Math.round(total * 100) / 100;

		$("#nota").html("Nota final: " + totalRedondeado);	
		$("#nota").val(total);
		$("#notaFinal").attr("value",totalRedondeado);
		
	}

	
	
	$(".contenido").change(function(){
		calcularContenido();
	});

	$(".planteamiento").change(function(){
		calcularPlanteamiento();
	});
	$(".expresion").change(function(){
		calcularExpresion();
	});

	calcularContenido();
	calcularPlanteamiento();
	calcularExpresion();

});

