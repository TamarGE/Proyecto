document.addEventListener('DOMContentLoaded', function () {
    const autoInput = document.querySelectorAll('.autocomplete');

    $.ajax("autocomplete.php")
        .done(function (data) {
            M.Autocomplete.init(autoInput, {
                data: JSON.parse(data)
            })
        })
        .fail(function () {
            alert("error");
        })

})

$("#submitBtn").click(function(){
alert ('Articulo.php?que='+$("#queryInput").val()+'');
    location.href ='Articulo.php?que='+$("#queryInput").val()+'';
})