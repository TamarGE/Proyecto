<?php
$con = new mysqli("localhost", "root", "rootroot");
mysqli_select_db($con, "proyecto_2022");

if(isset($_POST['buscnom'])){
    if(!empty($_POST['buscnom']) || !empty($_POST[nom]) || !empty($_POST[sint]) || !empty($_POST[ejer])){
    $pad = $_POST['pad']
    $sql= "UPDATE Padecimientos SET Nombre=$_POST[nom]., Sintomas='$_POST[sint]', Ejercicios='$_POST[ejer]' WHERE Nombre='$_POST[pad]';";
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