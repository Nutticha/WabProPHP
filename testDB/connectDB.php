<?php
$servername = "localhost";
$username = "root";
$password = "";

//Create connection
$conn = new mysqli($servername , $username , $password);

//Check connection
if($conn -> connect_error){
    die("Connection failed : ".$conn -> connection_error);

}
echo "Connected successfully";

?>