<?php

function OpenCon(){
    $dbHost = "localhost";
	$dbUser = "root";
	$dbPassword = "";
    $dbName = "db_hack";
    
    $conn = new mysqli($dbHost, $dbUser, $dbPassword) or die ("Connection failed: %\n. $conn -> error");

    return $conn;
}

function CloseCon($conn){
    $conn -> close();
}

?>

<!-- <?php
include_once 'includes/db_connection.php';

$conn = OpenCon();

echo "Successfully connected";

CloseCon($conn);

?> -->