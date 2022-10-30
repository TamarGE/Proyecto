<?php
$sql = "INSERT INTO padecimientos (DSpad) VALUES ()"
$result = $con->query($sql);
$sql = "SELECT * from padecimientos where id=".$_REQUEST['IDPad'].";";
$result = $con->query($sql);
if($result->num_rows > 0){
 $row = mysqli_fetch_array($result);
$idnuevo=$row['id'];

$sql ="INSERT INTO detalles_padecimiento (Categoria, Texto, IDpad) VALUES ('Síntomas', ".$_REQUEST['s'].",' +  $idnuevo +') ;";
 }
$result = $con->query($sql)<
$sql = "INSERT INTO detalles_padecimiento (Categoria, Texto, IDpad) VALUES ('Ejercicios', ".$_REQUEST['e'].",' +  $idnuevo +') ;";
 }
$result = $con->query($sql)

?>