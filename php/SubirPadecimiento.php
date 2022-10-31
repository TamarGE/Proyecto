<?php
require_once "config.php";

    if(!empty('Cnom') || !empty('Csin') || !empty('Cque') || !empty('Ceje')){

        $sql = "SELECT * from padecimientos where DSpad='".$_REQUEST['Cnom']."';";
        $result = $con->query($sql);

        if(!($result->num_rows > 0)){
            
            /*echo '<script type ="text/JavaScript"> alert("Este padecimiento ya existe en nuestro registro. Si desea realizar cambios, utilice la función de EDITAR")</script>';
            
        }else{*/
            $sql = "INSERT INTO padecimientos (DSpad) VALUES('".$_POST['Cnom']."');";
            $result = $con->query($sql);
    
            $sql = "SELECT * from padecimientos where DSpad='".$_REQUEST['Cnom']."';";
            $result = $con->query($sql);
                $row = mysqli_fetch_array($result);
                $idnuevo=$row['IDpad'];
            
                $sql ="INSERT INTO detalles_padecimiento (Categoria, Texto, IDpad) VALUES (2, ".$_POST['Ceje']."," +  $idnuevo +") ;";
                $result = $con->query($sql);
            
                $sql = "INSERT INTO detalles_padecimiento (Categoria, Texto, IDpad) VALUES (1, ".$_POST['Csin'].",' +  $idnuevo +') ;";
                $result = $con->query($sql);
            
                $sql = "INSERT INTO detalles_padecimiento (Categoria, Texto, IDpad) VALUES (3, ".$_POST['Cque'].",' +  $idnuevo +') ;";
                $result = $con->query($sql);

        }
        if(!$result){
            echo "No se pudo publicar el comentario";
            exit();
        }else{
            header('refresh:1; url=../html/Editor.html');
            echo '<script type ="text/JavaScript"> alert("Comentario Publicado")</script>';
            exit();
        }
    }


?>

<?php/*

if(isset($_POST['submit_pad'])){
    require_once('../php/Conectar.php');
    $nombre = mysqli_real_escape_string($con, $_POST['NomPd']);
    $sinto = mysqli_real_escape_string($con, $_POST['SintPd']);
    $ejerc = mysqli_real_escape_string($con, $_POST['EjerPd']);

    if(!empty($nombre) || !empty($sinto) || !empty($ejerc) || !empty($otros)){

        $sqlnom = "INSERT INTO Padecimientos (Nombre) VALUES('$nombre');";
        $excute = mysqli_query($con,$sqlnom);
        $sqls = "INSERT INTO PadCar (Categorias) VALUES('$sint');";
        $sqle = "INSERT INTO PadCar (Categorias) VALUES('$ejerc');";}
        $excuteS = mysqli_query($con,$sqls);
        $excuteE = mysqli_query($con,$sqle);

        if(!$excute || !$excuteS || !$excuteE){
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

*/

?>