<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itbook";
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
$id = $_GET['id'];
$sql = "DELETE FROM book WHERE BookID = '$id' ";
mysqli_query($conn,$sql) or die ( "DELETE จากตาราง book มขีอ้ผิดพลาดเกิดข้ึน"
.mysqli_error());
mysqli_close ( $conn );
header("Location:listofbook.php");
?>