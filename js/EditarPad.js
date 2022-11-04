$(document).ready(function(){

$("#O").hide();


$("#submitBtn").click(function(){
	$.ajax({
		type:'GET',
		url: '../php/VerContenido.php',
		dataType: "json",
		data: 'que=' + $("#buscnom").val() ,
		success: function (datos) {
			
			$.each(datos, function(i, item) {
				CKEDITOR.instances.EQ.setData(datos[0].value);
				CKEDITOR.instances.ES.setData(datos[1].value);
				CKEDITOR.instances.EJ.setData(datos[2].value);
				
			});
				

		 },

	});
});


// conexión con la db
$("#E").click(function(){
	//alert (CKEDITOR.instances.EQ.getData());
	$.ajax({
		type:'POST',
		url: '../php/EditarPadecimiento.php',
		dataType: "html",
		data: 'bus=' + $("#buscnom").val()+'&nom=' + $("#EN").val() + '&que=' + CKEDITOR.instances.EQ.getData() + '&sint=' + CKEDITOR.instances.ES.getData() + '&ejer=' + CKEDITOR.instances.EJ.getData(),
		success: function (datos) {
			//if(datos.status == 'ok'){
				//window.location = "../html/Editor.html";
				//alert ('nom=' + $("#EN").val() + '&que=' + $("#EQ").val() + '&sint=' + $("#ES").val() + '&ejer=' + $("#EJ").val());		/*
				$("#O").html(mensaje);
				$("#O").show(450);*/
		/*	}else{
				mensaje="Mensaje no enviado";
				$("#O").show();
			}
*/
		 },

	});
});


}); 
