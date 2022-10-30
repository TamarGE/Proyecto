<?php
$con = new mysqli("127.0.0.1","Todos", "");//conección al phpmyadmin de mi casa para probar
//$con = new mysqli("localhost", "root", "rootroot");//conección al phpmyadmin del cole
mysqli_select_db($con,"proyecto_2022");


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    exit();
}

?>