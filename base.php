<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "horarios";



$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    
    die("Connection failed: " . mysqli_connect_error());
    
}