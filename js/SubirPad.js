$(document).ready(function(){

$("#O").hide();

$("#S").click(function(){
	$.ajax({
		type:'POST',
		url: '../php/SubirPadecimiento.php',
		dataType: "json",
		data: 'Nom=' + $("#CN").val() + 'Que=' + $("#CQ").val() + 'Sint=' + $("#CS").val() + '&Ejer=' + $("#CE").val(),
		success: function (datos) {
			if(datos.status == 'ok'){
				alert("Padecimiento guardado exitosamente");
				alert("Nom=" + $('#CN').val() + "Que=" + $('#CQ').val() + "Sint=" + $('#CS').val() + "&Ejer=" + $("#CE").val());
				window.location="../html/Editos.html";
			}else{
				alert ("Error: Padecimiento no guardado");
			}

		 },

	});
});


}); 
