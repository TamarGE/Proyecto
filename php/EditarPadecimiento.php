<?php
require_once "config.php";
if(!empty('nom') || !empty('sint') || !empty('que') || !empty('ejer')){

    $sql = "SELECT * from padecimientos where DSpad='".$_REQUEST['nom']."';";
    $result = $con->query($sql);

    if(!($result->num_rows > 0)){
        $sql = "INSERT INTO padecimientos (DSpad) VALUES ('".$_REQUEST['nom']."')";
        $result = $con->query($sql);

        $sql = "SELECT * from padecimientos where DSpad='".$_REQUEST['Cnom']."'";
        $result = $con->query($sql);
        $row = mysqli_fetch_array($result);
        $idnuevo=$row['IDpad'];
        $sql1 ="INSERT INTO detalles_padecimiento (IDCat, Texto, IDpad) VALUES (2,'".$_REQUEST['ejer']."',".$idnuevo.")";
        $result = $con->query($sql1);
    
        $sql2 = "INSERT INTO detalles_padecimiento (IDCat, Texto, IDpad) VALUES (1,'".$_REQUEST['sint']."',".$idnuevo.")";
        $result = $con->query($sql2);
    
        $sql3 = "INSERT INTO detalles_padecimiento (IDCat, Texto, IDpad) VALUES (3,'".$_REQUEST['que']."',".$idnuevo.")" ;
        $result = $con->query($sql3);
    }
    else{
        echo '<script type ="text/JavaScript"> alert("Es necesario ingresar que padecimiento se desea cambiar y visualizar el contenido actual para poder realizar los cambios")</script>';
    }
    if(!$result){
        echo "No se pudo editar el padecimiento";
        exit();
    }else{
        header('refresh:1; url=../html/Editor.html');
        echo '<script type ="text/JavaScript"> alert("Comentario Publicado")</script>';
        exit();
    }
}

/*
if(!$result){
            echo "Failed to submit the data";
            exit();
            //tengo que cambiar el url.
        }else{
            //header('refresh:5; url=../html/Editor.html');
            echo "Article Published succesfully";
            exit();
        }*/
     
    



?>