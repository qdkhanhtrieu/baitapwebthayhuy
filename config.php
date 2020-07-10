<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = 'datvemaybay';


// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);
mysqli_query($conn,"SET NAMES 'UTF8'");
?>