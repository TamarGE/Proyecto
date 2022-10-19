$(document).ready(function(){



	$("#S").html(); //sintomas
	$("#E").html("Debe ingresar Usuario y Contraseña"); //ejercicios
	$("#Ot").html("Debe ingresar Usuario y Contraseña"); //otros

	$("#S").html("Debe ingresar Usuario y Contraseña"); //Nombre

// conexión con la db
$("#E").click(function(){
	$.ajax({
		type:'POST',
		url: '../php/Validadmin.php',
		dataType: "json",
		data: 'usu=' + $("#u").val() + '&pass=' + $("#p").val(),
		success: function (datos) {
			if(datos.status == 'ok'){
				window.location = "../html/Editor.html";/*
				$("#O").html(mensaje);
				$("#O").show(450);*/
			}else{
				mensaje="Trastorno no encontrado"; //ver lo del mensaje.
				$("#O").show();
			}

		 },

	});
});


}); 
