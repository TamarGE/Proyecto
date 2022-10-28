$(document).ready(function(){

// conexión con la db
$("#E").click(function(){
	$.ajax({
		type:'POST',
		url: '../php/BuscarPad.php',
		dataType: "json",
		data: '=' + $("#autocomplete-input").val(),
		success: function (datos) {
			if(datos.status == 'ok'){
				window.location = "";
			}else{
				mensaje="Usuario no encontrado ";
				$("#O").show();//revisar esto, como hacer para que maparezca una alerta o algo para no poner un label
			}

		 },

	});
});


}); 
