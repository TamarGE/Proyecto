<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
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
                <a href="" class="brand-logo"><img src="../Logo.png" height="60" class="vertical-align:middle"></a>
                    <a href="" data-target="mobile-nav" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="../html/Editor.html">Volver a Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-nav">
        <li><a href="../html/Editor.html">Volver a Admin</a></li>
    </ul>

<!--Ver Mensajes-->
<section id="comentarios" class="section section-comentarios">
    <div class="container">
        <h3 class="text center">Comentarios</h3>
        <div class="rows">
            <div class="col s12">
                <table class="center striped responsive-table" id="dbcomentario">
                    <thead>
                        <th>Nombre</th>
                        <th>Mail</th>
                        <th>Comentario</th>
                    </thead>
                    <tbody>
                    <?php
                        require_once "config.php";
                        $data=array();

                            $sql='SELECT DISTINCT Nombre, Mail, Comentario from comentarios ORDER BY Nombre;';
                            $query = mysqli_query($con, $sql);

                            while($result = mysqli_fetch_array($query)){
                                echo "<tr>
                                    <td>".$result['Nombre']."</td>
                                    <td>".$result['Mail']."</td>
                                    <td>".$result['Comentario']."</td>
                                </tr>";
                            }

                        $con->close();
                    ?>
                        <script src="../php/TablaComentarios.php"></script>
                    <!--
                    -->
                    
                    </tbody>
                </table>
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
</body>

</html>
