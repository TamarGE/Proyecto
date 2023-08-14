<?php
require_once "config.php";
if(!empty($_REQUEST['bus'])){
    $sql = "SELECT * from padecimientos where DSpad='".$_REQUEST['bus']."'";
    $result = $con->query($sql);
//echo $sql;
    if(!($result->num_rows > 0)){
        if(!empty('nom') || !empty('sint') || !empty('que') || !empty('ejer')){

            $sql = "DELETE * from padecimientos where DSpad='".$_REQUEST['bus']."';";
            $result = $con->query($sql);
        }
    }

?>