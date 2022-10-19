<?php
$con = new mysqli("localhost", "root", "rootroot");
mysqli_select_db($con, "proyecto_2022");

if($con->connect_error){
	die("Connection failed: " . $con->connect_error);
}

$data=array();

	$sql="Select * from comentarios ORDER BY Nombre";
	
	while($result = mysqli_fetch_array($sql)){
		echo "<tr>
			<td>".$result.['Nombre']."</td>
			<td>".$result.['Mail']."</td>
			<td>".$result.['Comentario']."</td>
		</tr>";
	}

 $con->close();
?>

