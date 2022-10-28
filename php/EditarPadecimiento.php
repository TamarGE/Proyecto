<?php
require_once "config.php";

if(isset($_POST['buscnom'])){
    if(!empty($_POST['buscnom']) || !empty($_POST[nom]) || !empty($_POST[sint]) || !empty($_POST[ejer])){
    $pad = $_POST['pad']
    $sql= "UPDATE padecimientos SET DSpad="'.$_POST[nom].'" WHERE DSpad="'.$_POST[pad].'";";
    $sql= "UPDATE padecimientos SET ="'.$_POST[nom].'", Sintomas="'.$_POST[sint].'", Ejercicios="'.$_POST[ejer].'" WHERE Nombre="'.$_POST[pad].'";";
    $excute=mysqli_query($con,$sql);
    }
        if(!$excute){
            echo "Failed to submit the data";
            exit();
            //tengo que cambiar el url.
        }else{
            header('refresh:5; url=../html/Editor.html');
            echo "Article Published succesfully";
            exit();
        }
        header('Location: dashboard.php?emptyField');
        exit();
    }
}


?>