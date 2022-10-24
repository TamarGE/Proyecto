$(document).ready(function(){
/*videos para mirar para hacer que aparezca el texto buscado en otra página:
https://www.youtube.com/watch?v=V5ChXF2Ps9o --> está en hindú.
*/
$("#autocomplete-input").autocomplete({
  source: function( request, response ) {
         // Fetch data
           $.ajax({
            url: "busca.php",
            type: 'POST',
            dataType: "json",
            data: {
             pad: request.term
            },
            success: function( data ) {
             response( data );
            }
           });
  },
  open: function(){
          $('.ui-autocomplete').css('width', '250px');
          $('.ui-autocomplete').css('font-size', '18px');
  },
  select: function (event, ui) {
         // Set selection
         $('#autocomplete').val(ui.item.label); // display the selected text
         $(this).val(ui.item.label);
         BuscarDescrip(ui.item.value);
         return false;
  },
  /*focus: function(event, ui){
         $( "#autocomplete" ).val( ui.item.label );
         $(this).val(ui.item.label);
         BuscarDescrip(ui.item.value);
         return false;
   },*/

 });


function BuscarDescrip (pade){
  $("#sintomas").html("");
    //alert (pade);
    $.ajax({
      type: 'POST',
      url: '../php/buscadetalle.php',
      dataType: "json",
      data: 'IDPad=' + autocomplete_input +'',
      success: function (data) {
        //alert (data);
        if(datos.status == 'ok'){
          window.location = "../html/Articulo(NO).html";
        }
        $.each(data,function(i,v){
          //alert (v.label);
          $("#s").html(v.label);
        });
      },
      error: function(error) {
          ;
      },
    });       
}



});