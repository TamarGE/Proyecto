$(document).ready(function(){

$("#O").hide();

/*$("#E").mouseover(function(){
	$(".boton").css("cursor", "pointer"); //esta línea la voy a sacar, probablemente.
	//Tengo que agregar un label con id=O (o cambiar el id en el js) para que aparezcan las alertas si hay un campo vacío.
if($("#u").val()==''&& $("#p").val()==''){
	$("#O").html("Debe ingresar Usuario y Contraseña");
	$("#O").show();
	$("#O").css("color", "#EF9A9A");
	$("#O").css("padding-left", "5px");
	$("#O").css("font-weight", "500");
	$("#O").css("font-size", "16px");
}else if ($("#u").val()!=''&& $("#p").val()==''){
	$("#O").html("Debe ingresar Contraseña");
	$("#O").show();
	$("#O").css("color", "#EF9A9A");
	$("#O").css("padding-left", "5px");
	$("#O").css("font-weight", "500");
	$("#O").css("font-size", "16px");
}else if($("#u").val()=='' && $("#p").val()!=''){
	$("#O").html("Debe ingresar Usuario");
	$("#O").show();
	$("#O").css("color", "#EF9A9A");
	$("#O").css("padding-left", "5px");
	$("#O").css("font-weight", "500");
	$("#O").css("font-size", "16px");
}

});*/

// conexión con la db
$("#E").click(function(){
	$.ajax({
		type:'POST',
		url: '../php/SubirPadecimiento.php',
		dataType: "json",
		data: 'nom=' + $("#n").val() + 'sin=' + $("#s").val() + '&eje=' + $("#e").val(),
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
