<?php
require_once "config.php";
$data=array();

	$sql="Select IDadmin, Nombre from admin where Usuario='".$_REQUEST['usu']."' and Contrasenia='".$_REQUEST['pass']."'";
	//echo $sql;

	$res=$con->query($sql);
	$i=0;
	if($res->num_rows > 0){
		$userData = $res ->fetch_assoc();
		$data['status'] = 'ok';
		$data['result'] = $userData;
	}else{
		$data['status'] = 'err';
		$data['result'] = '';
	}
echo json_encode($data);

 $con->close();
?>
