<?php
$con = new mysqli("localhost", "root", "rootroot");
mysqli_select_db($con, "proyecto_2022");

if($con->connect_error){
	die("Connection failed: " . $con->connect_error);
}

    if(!empty('Cnom') || !empty('Csin') || !empty('Ceje')){

        $sql = "INSERT INTO Padecimientos (Nombre,Sintomas,Ejercicios) VALUES('$_POST[Cnom]','$_POST[Csin]','$_POST[Ceje]');";
        $excute = mysqli_query($con,$sql);
    }
if (!mysqli_query($con,$sql)) { 
    die('Error: ' . mysql_error());
 }
 if(!$excute){
    echo "No se pudo guardar el padecimiento";
    exit();
}else{
    header('refresh:5; url=../html/Principal.html');
    echo "Padecimiento Publicado";
    exit();
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