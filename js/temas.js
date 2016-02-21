function cambiarTema(tema)
{
	//alert(tema);
	limpiarTemas();
	if(tema != "a" && tema != "b" && tema != "c" && tema != "d") tema = "a";
	$("body, body > div").addClass( "ui-page-theme-" + tema );
	localStorage.setItem("tema",tema);
}

function limpiarTemas()
{
	$("body, body > div").removeClass("ui-page-theme-a ui-page-theme-b ui-page-theme-c ui-page-theme-d");
	$("body, body > div").removeClass("ui-overlay-a");
}

$(document).ready(function() {
	cambiarTema(localStorage.getItem("tema"));
	
	$(".cambiaTema").click(function(event){
		
		cambiarTema($(this).attr("value"));
	});
});

$( window ).on( "hashchange", function( event ) {
			cambiarTema(localStorage.getItem("tema"));
			
			$(".cambiaTema").click(function(event){
		
				cambiarTema($(this).attr("value"));
			});
} );
