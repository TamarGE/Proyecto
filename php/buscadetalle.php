<?php
$con = new mysqli("localhost", "root", "rootroot");
mysqli_select_db($con,"proyecto_2022");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$data=array();

$sql="Select * from detalles_padecimiento where IDpad=".$_REQUEST['IDPad']."";
//echo $sql;

$result=$con->query($sql);
    
if($result->num_rows > 0){
       
 while($row = mysqli_fetch_array($result) ){
   $data[] = array("value"=>$row['IDgeneral'],"label"=>$row['Texto']);
 }

 echo json_encode($data);
}


$con->close();
?>
