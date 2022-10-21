<?php

if(isset($_POST['buscnom'])){
    require_once('../php/Conectar.php');
    $nombre = mysqli_real_escape_string($con, $_POST['nomedit']);
    $sinto = mysqli_real_escape_string($con, $_POST['SintTxt']);
    $ejerc = mysqli_real_escape_string($con, $_POST['EjerTxt']);
    $otros = mysqli_real_escape_string($con, $_POST['OtroTxt']);
//Tengo que cambiar todas las sentencias por UPDATE y ajustar el código a eso
    if(!empty($nombre) || !empty($sinto) || !empty($ejerc) || !empty($otros)){

        $sqlnom = "UPDATE Padecimientos SET Nombre = ('$nombre') WHERE id = '".$_REQUEST['buscnom']."';";
        $excute = mysqli_query($con,$sqlnom);
        $sqls = "UPDATE PadCar SET Texto = ('$sint') WHERE id = '".$_REQUEST['buscnom']."' AND Categoria = 'Síntomas';";
        $sqle = "UPDATE PadCar SET Texto = ('$ejerc') WHERE id = '".$_REQUEST['buscnom']."' AND Categoria = 'Ejercicios';";
        $sqlo =  "UPDATE PadCar SET Texto = ('$otros') WHERE id = '".$_REQUEST['buscnom']."' AND Categoria = 'Ejercicios';";
        $excuteS = mysqli_query($con,$sqls);
        $excuteE = mysqli_query($con,$sqle);
        $excuteO = mysqli_query($con,$sqlo);

        if(!$excute || !$excuteS || !$excuteE || !$excuteO){
            echo "Failed to submit the data";
            exit();
            //tengo que cambiar el url.
        }else{
            header('refresh:5; url=../html/Editor.html');
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