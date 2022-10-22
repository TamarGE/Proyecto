$(document).ready(function(){

$("#O").hide();

// conexión con la db
$("#E").click(function(){
	$.ajax({
		type:'POST',
		url: '../php/EditarPadecimiento.php',
		dataType: "json",
		data: 'nom=' + $("#EN").val() + 'sint=' + $("#ES").val() + '&ejer=' + $("#EJ").val(),
		success: function (datos) {
			if(datos.status == 'ok'){
				window.location = "../html/Editor.html";/*
				$("#O").html(mensaje);
				$("#O").show(450);*/
			}else{
				mensaje="Mensaje no enviado";
				$("#O").show();
			}

		 },

	});
});


}); 
