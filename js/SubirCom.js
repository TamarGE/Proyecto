$(document).ready(function(){

// conexión con la db
$("#E").click(function(){
	//alert('nom=' + $("#n").val() + '&mail=' + $("#m").val() + '&com=' + $("#c").val());
	$.ajax({
		type:'POST',
		url: 'php/SubirComentario.php',
		dataType: "html",
		data: 'nom=' + $("#n").val() + '&mail=' + $("#m").val() + '&com=' + $("#c").val(),
		success: function (datos) {
			if(datos == 'S'){
				window.location = "Principal.html";
			//	alert("Comentario Publicado");
			}else{
				alert("Mensaje no enviado");
			}
			
		 },

	});
});


}); 
