<?php
$con = new mysqli("localhost", "root", "rootroot");
mysqli_select_db($con, "proyecto_2022");

if($con->connect_error){
	die("Connection failed: " . $con->connect_error);
}

$data=array();

$sql="Select * from padecimientos where DSpad like '%".$_REQUEST['pad']."'";


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


//Variable que contendrá el resultado de la búsqueda

$texto = "";

if($_POST){

$busqueda = trim($_POST[‘’]);

$entero = 0;

if (empty($busqueda)){

$texto = ‘Búsqueda sin resultados’;

}else{

// Si hay información para buscar, abrimos la conexión

conectar();

mysql_set_charset(‘utf8’);

// mostramos la información en utf-8

//Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar

$sql = «SELECT * FROM prov_tab WHERE provincia LIKE ‘%» .$busqueda. «%’ ORDER BY provincia»;

$resultado = mysql_query($sql); //Ejecución de la consulta

//Si hay resultados…

if (mysql_num_rows($resultado) > 0){

// Se recoge el número de resultados

$registros = ‘<p>HEMOS ENCONTRADO ‘ . mysql_num_rows($resultado) . ‘ registros </p>’;

// Se almacenan las cadenas de resultado

while($fila = mysql_fetch_assoc($resultado)){

$texto .= $fila[‘provincia’] . ‘<br />’;

}

}else{ $texto = «NO HAY RESULTADOS EN LA BBDD»;

}

 $con->close();
?>
