<?php
require_once 'config.php';

$sql = "SELECT IDpad from padecimientos where DSPad='".$_GET['que']."'";
$results = mysqli_query($con, $sql);
$pad_nombres = mysqli_num_rows($results);
$deta = array();

if($pad_nombres > 0){
    while($row = mysqli_fetch_array($results) ){
        $sql2="Select * from detalles_padecimiento where IDpad=".$row['IDpad']." ORDER BY IDCat";
        $results2 = mysqli_query($con, $sql2);
        $pad2=mysqli_num_rows($results2);
        if ($pad2>0){
            while($row2 = mysqli_fetch_array($results2)){
                ///echo $row2['Texto'].$row2['IDCat']."<br>";
                $deta[]=array("value"=>$row2['Texto']);
            }
        }

    }
    /*for ($i=0;$i<=2;$i++){
        echo $deta[$i]["value"];
    }*/
}

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
    <link rel="stylesheet" href="../css/style.css">

    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
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
                        <li><a href="../html/Editor.html">Volver al Administrador</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-nav">
        <li><a href="../html/Editor.html">Volver al Administrador</a></li>
    </ul>

<!--Artículo-->
<section id="articulo" class="section section-articulo">
    <div class="container">
        <h2 class="text center">Nombre Padecimiento</h2>
        <br>
        <div class="col s12">
            <div class="card flow-text">
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab red lighten-3" ><a href="#Quees" class="black-text">¿Qué es?</a></li>
                        <li class="tab red lighten-3" ><a href="#Sintomas" class="black-text">Síntomas</a></li>
                        <li class="tab red lighten-3"><a href="#Ejercicios" class="black-text">Ejercicios</a></li>
                    </ul>
                    <!--active es el que se va a ver al principio. Si no se pone un active, por default el primero va a ser el que se vea-->
                </div>
                <div class="card-content teal lighten-4">
                    <div id="Quees">
                        <p id="Q"><?php echo $deta[2]['value']?></p>
                     </div>
                    <div id="Sintomas">
                        <p id="S"><?php echo $deta[0]['value']?></p>
                     </div>
                    <div id="Ejercicios">
                        <p id="E"><?php echo $deta[1]['value']?></p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>

<!--Footer-->
<footer class="section teal lighten-3 white-text center-align">
    <a href="" class="brand-logo center"><img src="../Logo.png" height="100" class="center vertical-align:middle"></a>
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
