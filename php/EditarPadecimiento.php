<?php

if(isset($_POST['submit_pad'])){
    require_once('../php/Conectar.php');
    $nombre = mysqli_real_escape_string($con, $_POST['NomPd']);
    $sinto = mysqli_real_escape_string($con, $_POST['SintPd']);
    $ejerc = mysqli_real_escape_string($con, $_POST['EjerPd']);
    $otros = mysqli_real_escape_string($con, $_POST['OtroPd']);
//Tengo que cambiar todas las sentencias por UPDATE y ajustar el código a eso
    if(!empty($nombre) || !empty($sinto) || !empty($ejerc) || !empty($otros)){

        $sqlnom = "INSERT INTO Padecimientos (Nombre) VALUES('$nombre');";
        $excute = mysqli_query($con,$sqlnom);
        $sqls = "INSERT INTO PadCar (Categorias) VALUES('$sint');";
        $sqle = "INSERT INTO PadCar (Categorias) VALUES('$ejerc');";
        $sqlo = "INSERT INTO PadCar (Categorias) VALUES('$otros');";
        $excuteS = mysqli_query($con,$sqls);
        $excuteE = mysqli_query($con,$sqle);
        $excuteO = mysqli_query($con,$sqlo);

        if(!$excute || !$excuteS || !$excuteE || !$excuteO){
            echo "Failed to submit the data";
            exit();
            //tengo que cambiar el url.
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