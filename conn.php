<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname ="db_addmission";

$conn = new mysqli($servername,$usernam,$password,$bdname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}





?>