<?php
$con = new mysqli("localhost", "root", "rootroot");
mysqli_select_db($con, "proyecto_2022");

if($con->connect_error){
	die("Connection failed: " . $con->connect_error);
}

$data=array();

$sql="Select * from padecimientos where DSpad like '%".$_REQUEST['pad']."'";
$nom = $con->query($sql);

while($row = mysqli_fetch_assoc($nom)){
	echo $row["Nombre"];
}


$sql1="Select * from detalles_padecimiento where IDpad like '%".$_REQUEST['pad']."' AND categoria='sintomas';";
$sint = $con->query($sql1);

while($row = mysqli_fetch_assoc($sint)){
	echo $row["texto"];
}

$sql2="Select * from detalles_padecimiento where IDpad like '%".$_REQUEST['pad']."' AND categoria='ejercicios';";
$otro = $con->query($sql2);

while($row = mysqli_fetch_assoc($otro)){
	echo $row["texto"];
}

echo json_encode($data);

 $con->close();
?>
