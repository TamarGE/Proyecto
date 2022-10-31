<?php
require_once "config.php";


    if(!empty('nom') || !empty('mail') || !empty('com')){

        $sql = "INSERT INTO Comentarios (Nombre,Mail,Comentario) VALUES ('".$_REQUEST['nom']."','".$_REQUEST['mail']."','".$_REQUEST['com']."')";
//echo $sql;
        $excute = mysqli_query($con,$sql);
    }
if (!mysqli_query($con,$sql)) { 
    die('Error: ' . mysql_error());
 }

 if(!$excute){
    echo "N";
    exit();
}else{
    //header('refresh:1; url=../Principal.html');
    echo "S";
    exit();
}


?>