<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname ="db_admission";

$conn = new mysqli($servername,$username,$password,$bdname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}





?>