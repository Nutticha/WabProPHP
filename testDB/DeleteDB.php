<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $name = $_POST['name'];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    // Create database
    $sql = "DROP DATABASE $name";
    if (mysqli_query($conn, $sql)) {
    echo "Database DROP successfully";
    } else {
    echo "Error DROP database: " . mysqli_error($conn);
    }
    mysqli_close($conn);


?>