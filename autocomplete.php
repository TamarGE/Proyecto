<?php
require_once './php/config.php';

$sql = "SELECT * from padecimientos";
$results = mysqli_query($con, $sql);
$pad_nombres = mysqli_num_rows($results);

if($pad_nombres > 0){
    while($row = mysqli_fetch_array($results) ){
      $titles[$row['DSpad']] = null;
    }
}else{
    echo json_encode(array());
    exit();
}

echo json_encode($titles);
exit();


?>