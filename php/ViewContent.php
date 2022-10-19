<?php
    require_once('../php/Conectar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículo</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<!--
    TENGO QUE ARREGLAS LAS H1-6 PARA QUE TENGAN EL TAMAÑO CORRECTO, Y CAMBIARLES
    EL PADDING PARA QUE NO ESTÉN TAN SEPARADOS LOS TEXTOS ENTRE SÍ. 
-->
<body id="inicio">
    <!--NavBar-->
    <div class="navbar-fixed">
        <nav class="teal lighten-3">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">NOMBRE</a>
                </div>
            </div>
        </nav>
    </div>

<!--Artículo-->
<section id="articulo" class="section section-articulo">
    <div class="container">
        <h2 class="text center">Nombre Padecimiento</h2>
        <br>
        <div class="col s12">
            <div class="card flow-text">
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab red lighten-3" ><a href="#Sintomas" class="black-text">Síntomas</a></li>
                        <li class="tab red lighten-3"><a href="#Ejercicios" class="black-text">Ejercicios</a></li>
                        <li class="tab red lighten-3"><a href="#Otros" class="black-text">Otros</a></li>
                    </ul>
                    <!--active es el que se va a ver al principio. Si no se pone un active, por default el primero va a ser el que se vea-->
                </div>
                <div class="card-content teal lighten-4">
                    <div id="Sintomas">
                        <?php
                        $sql = "SELECT * FROM padecimientos where DSpad like '%".$_REQUEST['buscnom']."' AND Categoria = 'Síntomas';";
                        $excute = mysqli_query($con,$sql);
                        $Postdata = mysqli_num_rows($excute);
                        if($Postdata > 0){
                            while($row = mysqli_fetch_array($excute)){  
                            $categ = $row['Categoria'];
                            $texto = $row['Texto'];
                            echo $row['PadId'];
                            echo $row['--------------'];?>
                        <p name="Sin" id="S">
                        <?php echo $row['Texto'];?>
                        </p>
                     </div>
                    <div name="Eje" id="Ejercicios">
                        <?php
                        $sql2 = "SELECT * FROM padecimientos where DSpad like '%".$_REQUEST['buscnom']."' AND Categoria = 'Ejercicios';";
                        $excute2 = mysqli_query($con,$sql2);
                        $Postdata2 = mysqli_num_rows($excute2);
                        if($Postdata2 > 0){
                            while($row = mysqli_fetch_array($excute2)){  
                            $categ = $row['Categoria'];
                            $texto = $row['Texto'];
                            echo $row['PadId'];
                            echo $row['--------------'];?>
                        <p id="E">
                        <?php echo $row['Texto'];?>
                        </div>
                    <div name="Otr" id="Otros">
                    <?php
                        $sql2 = "SELECT * FROM padecimientos where DSpad like '%".$_REQUEST['buscnom']."' AND Categoria = 'Otros';";
                        $excute2 = mysqli_query($con,$sql2);
                        $Postdata2 = mysqli_num_rows($excute2);
                        if($Postdata2 > 0){
                            while($row = mysqli_fetch_array($excute2)){  
                            $categ = $row['Categoria'];
                            $texto = $row['Texto'];
                            echo $row['PadId'];
                            echo $row['--------------'];?>
                        <p id="O">
                        <?php echo $row['Texto'];?>
                        </div>
                </div>
            </div>
        </div> 
    </div>
</section>

<!--Footer-->
<footer class="section teal lighten-3 white-text">
<div class="row">
    <div class="col s8 l4">
        <h6>NOMBRE</h6>
    </div>
    <div class="col s4 right">
    <p class="flow-text">NOMBRE $copy; 2018</p>
<!--Flow text hace que el texto sea más responsive, se
    agranda cuando la pantalla es más grande y achica un 
    poco cuando la pantalla es más pequeña-->
</div>
</div>
</footer>
            
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script>
        //sidenav
        const sideNav = document.querySelector('.sidenav');
        M.Sidenav.init(sideNav,{});
        //slider
        const slider = document.querySelector('.slider');
        M.Slider.init(slider,{
            indicators: false,
            height: 500,
            transition: 500,
            interval: 6000
        });
        //autocomplete
        const ac = document.querySelector('.autocomplete');
        M.Autocomplete.init(ac,{
            data: {
                "Depresión": null,
                "Ansiedad": null,
                "Anorexia": null,
                "Bipolar": null,
                "TDAH": null,
            }});
        //material boxed
        const mb = document.querySelector('.materialboxed');
        M.Materialboxed.init(mb, {});
        //scrollspy
        const ss = document.querySelectorAll('.scrollspy');
        M.Scrollspy.init(ss, {});
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems,{
            indicators: true
        });
        });
    </script>
</body>

</html>
