<?php
require_once 'config.php';

$sql = "SELECT IDpad from padecimientos where DSPad='".$_GET['que']."'";
$results = mysqli_query($con, $sql);
$pad_nombres = mysqli_num_rows($results);
$deta = array();

if($pad_nombres > 0){
    while($row = mysqli_fetch_array($results) ){
        $sql2="Select * from detalles_padecimiento where IDpad=".$row['IDpad']." ORDER BY IDCat";
        $results2 = mysqli_query($con, $sql2);
        $pad2=mysqli_num_rows($results2);
        if ($pad2>0){
            $i=0;
            while($row2 = mysqli_fetch_array($results2)){
                ///echo $row2['Texto'].$row2['IDCat']."<br>";
                $deta[]=array("id"=>$i,"value"=>$row2['Texto']);
                $i++;
            }
        }

    }
    /*for ($i=0;$i<=2;$i++){
        echo $deta[$i]["value"];
    }*/
    echo json_encode($deta);


}


?>
