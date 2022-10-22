
<?php
//COMO NO SE SI EL PHP FUNCIONARÍA AFUERA DEL HTML, TENGO UNA COPIA QUE ES PHP Y OTRA IGUAL PERO SOLO HTML
$con = new mysqli("localhost", "root", "rootroot");
mysqli_select_db($con, "proyecto_2022");

if($con->connect_error){
	die("Connection failed: " . $con->connect_error);
}

$data=array();
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
                    <a href="" data-target="mobile-nav" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="../html/Principal.html">Volver a la Página Principal</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-nav">
        <li><a href="../html/Principal.html">Volver a la Página Principal</a></li>
    </ul>

<!--Artículo-->
<section id="articulo" class="section section-articulo">
    <div class="container">
        <h2 class="text center"><?php
            $sql1="Select * from detalles_padecimiento where IDpad like '%".$_REQUEST['pad']."' AND categoria=sintomas;";
            $sint = $con->query($sql1);
            while($row = mysqli_fetch_assoc($sint)){
                echo $row["texto"];
            }?>
        </h2>
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
                        Síntomas
                        <p id="s">
                        <?php
                        
                        ?>
                        </p>
                     </div>
                    <div id="Ejercicios">
                        Ejercicios
                        <p id="e">
                        <?php
                        $sql2="Select * from detalles_padecimiento where IDpad like '%".$_REQUEST['pad']."' AND categoria=ejercicios;";
                        $otro = $con->query($sql2);
                        
                        while($row = mysqli_fetch_assoc($otro)){
                            echo $row["texto"];
                        }
                        ?>
                        </div>
            </div>
        </div> 
    </div>
</section>

<!--Footer-->
<footer class="section teal darken-2 white-text">
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