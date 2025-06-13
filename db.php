<?php

$servername = "localhost";
$username_db = "zp12674_manee"; 
$password_db = "@Jessada0835656488"; 
$dbname = "zp12674_lab";


$conn = new mysqli($servername, $username_db, $password_db, $dbname);


if ($conn->connect_error) {
    die("การเชื่อมต่อผิดพลาด: " . $conn->connect_error);
}
?>
