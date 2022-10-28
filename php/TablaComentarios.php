<?php
require_once "config.php";

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

