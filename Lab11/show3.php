<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "itbook";
$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Book.BookID as ID,book.BookName as BookName,typebook.TypeName as TypeName
FROM book 
INNER JOIN typebook
ON book.TypeID = typebook.TypeID
ORDER BY BookID";

if ($result = mysqli_query($conn, $sql)) {
    if(mysqli_num_rows($result) > 0){
        echo "<table border = 1>";
            echo "<tr>";
                echo "<th>book_id</th>";
                echo "<th>book_name</th>";
                echo "<th>type_name</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['BookName'] . "</td>";
                echo "<td>" . $row['TypeName'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_free_result($result);
    }
} else {
    echo "Error";
}
$conn->close();
?>
