<?php

if(isset($_POST['submit_com'])){
    require_once('../php/Conectar.php');
    $nombre = mysqli_real_escape_string($con, $_POST['NomCom']);
    $mail = mysqli_real_escape_string($con, $_POST['MailCom']);
    $coment = mysqli_real_escape_string($con, $_POST['ComCom']);

    if(!empty($nombre) || !empty($mail) || !empty($coment)){

        $sql = "INSERT INTO Comentarios (Nombre,Mail,Texto) VALUES('$nombre','$mail','$coment');";
        $excute = mysqli_query($con,$sql);

        if(!$excute){
            echo "Failed to submit the data";
            exit();
        }else{
            header('refresh:5; url=dashboard.php');
            echo "Article Published succesfully";
            exit();
        }


    }else{
        header('Location: dashboard.php?emptyField');
        exit();
    }

}else{
    header('Location: dashboard.php?invalidRequest');
    exit();
}



?>