$(document).ready(function(){

$("#pade").autocomplete({
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
  $("#detalles").html("");
    //alert (pade);
    $.ajax({
      type: 'POST',
      url: 'buscadetalle.php',
      dataType: "json",
      data: 'IDPad=' + pade +'',
      success: function (data) {
        //alert (data);
        $.each(data,function(i,v){
          //alert (v.label);
          $("#detalles").html(v.label);
        });
      },
      error: function(error) {
          ;
      },
    });       
}



});