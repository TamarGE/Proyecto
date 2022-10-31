<?php
require_once "config.php";

if(!empty('bnom')){
    $sql = "SELECT * from padecimientos where DSpad='".$_REQUEST['bnom']."'";
    $result = $con->query($sql);
//echo $sql;
    if($result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        $idnuevo=$row['IDpad'];
     //echo $idnuevo;       
        if(!empty('nom')){
            $sql1 = "UPDATE padecimientos SET DSpad='".$_REQUEST['nom']."' WHERE IDpad = ".$idnuevo."";
            $result = $con->query($sql1);
            echo $sql1;
        }
        if(!empty('sint')){
            $sql2 = "UPDATE detalles_padecimiento SET Texto='".$_REQUEST['sint']."' WHERE IDpad = ".$idnuevo." AND IDCat=1";
            $result = $con->query($sql2);
        }
        if(!empty('quee')){
            $sql3 = "UPDATE detalles_padecimiento SET Texto='".$_REQUEST['quee']."' WHERE IDpad = ".$idnuevo." AND IDCat=2";
            $result = $con->query($sql3);
        }
        if(!empty('ejer')){
            $sql4 = "UPDATE detalles_padecimiento SET Texto='".$_REQUEST['ejer']."' WHERE IDpad = ".$idnuevo." AND IDCat=3";
            $result = $con->query($sql4);
        }
    }else{
        echo '<script type ="text/JavaScript"> alert("Este padecimiento no existe en nuestro registro. Si desea agregarlo, utilice la función de CREAR")</script>';
    }    
}else{
    echo '<script type ="text/JavaScript"> alert("Es necesario ingresar que padecimiento se desea cambiar para poder realizar los cambios")</script>';
}
if(!$result){
            echo "Failed to submit the data";
            exit();
            //tengo que cambiar el url.
        }else{
            //header('refresh:5; url=../html/Editor.html');
            echo "Article Published succesfully";
            exit();
        }
     
    



?>