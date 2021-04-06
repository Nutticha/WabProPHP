<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $sql = "SHOW DATABASE";
    $link = mysqli_connect($servername, $username, $password) or
        die("Error connecting to mysql : " . mysqli_error($link). '\r\n');

    if(!($result = mysqli_query($link,$sql))){
        printf("Error : %s\n", mysqli_error($link));
    }

    while($row = mysqli_fetch_row($result)){
        if(($row[0] != "information_schema") && ($row[0] = "mysql")){
            echo $row[0]. "\r<br>";
        }
    }
?>