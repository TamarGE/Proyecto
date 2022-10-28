<?php
$con = new mysqli("localhost", "root", "rootroot");
mysqli_select_db($con,"proyecto_2022");


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    exit();
}

?>