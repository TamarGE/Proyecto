$(document).ready(function(){

$("#O").hide();

// conexión con la db
$("#S").click(function(){
	$.ajax({
		type:'POST',
		url: '../php/SubirPadecimiento.php',
		dataType: "json",
		data: 'Cnom=' + $("#n").val() + 'Csin=' + $("#s").val() + '&Ceje=' + $("#e").val(),
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
