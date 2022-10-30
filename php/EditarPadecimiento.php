<?php
require_once "config.php";

if(!empty('Cnom'){
    $sql = "SELECT * from padecimientos where DSpad=".$_REQUEST['Cnom'].";";
    $result = $con->query($sql);

    if($result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        $idnuevo=$row['IDpad'];
            
        if(!empty('Cnom'){
            $sql = "UPDATE padecimientos SET DSpad='".$_POST['Cnom']."' WHERE IDpad = '+ $idnuevo +');";
            $result = $con->query($sql);
        }
        if(!empty('Csin')){
            $sql = "UPDATE detalles_padecimiento SET Texto='".$_POST['Csin']."' WHERE IDpad = '+ $idnuevo +' AND Categoria='1');";
            $result = $con->query($sql);
        }
        if(!empty('Cque')){
            $sql = "UPDATE detalles_padecimiento SET Texto='".$_POST['Cque']."' WHERE IDpad = '+ $idnuevo +' AND Categoria='2');";
            $result = $con->query($sql);
        }
        if(!empty('Ceje')){
            $sql = "UPDATE detalles_padecimiento SET Texto='".$_POST['Ceje']."' WHERE IDpad = "'+ $idnuevo +'" AND Categoria='0');";
            $result = $con->query($sql);
        }
    }else{
        echo '<script type ="text/JavaScript"> alert("Este padecimiento no existe en nuestro registro. Si desea agregarlo, utilice la función de CREAR")</script>';
    }    
}else{
    echo '<script type ="text/JavaScript"> alert("Es necesario ingresar que padecimiento se desea cambiar para poder realizar los cambios")</script>';
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