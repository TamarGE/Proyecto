<?php
require_once "config.php"

if($con->connect_error){
	die("Connection failed: " . $con->connect_error);
}

    if(!empty('nom') || !empty('mail') || !empty('com')){

        $sql = "INSERT INTO Comentarios (Nombre,Mail,Comentario) VALUES('$_POST[nom]','$_POST[mail]','$_POST[com]');";
        $excute = mysqli_query($con,$sql);
    }
if (!mysqli_query($con,$sql)) { 
    die('Error: ' . mysql_error());
 }

 if(!$excute){
    echo "No se pudo publicar el comentario";
    exit();
}else{
    header('refresh:5; url=../html/Principal.html');
    echo "Comentario Publicado";
    exit();
}


?>