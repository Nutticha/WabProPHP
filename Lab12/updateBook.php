<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Book</title>
</head>
<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "itbook";
        $conn = mysqli_connect( $hostname, $username, $password, $dbname);
        mysqli_set_charset($conn,"utf8");

        $id = $_GET['id'];
        $sql = "select * from book where BookID = $id";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($result);
    ?>

    <form enctype="multipart/form-data" name="save" method="POST" action="savebookUpdate.php">
    <?php
        echo "<table border=1 align =center bgcolor=#FFCCCC>";
        echo "<tr><td align=center colspan = 2 bgcolor =#FF99CC><B>แก้ไขรายละเอียดหนังสือ</B></td></tr>";

        echo "<tr><td> รหัสหนังสือ : </td><td>".$data["BookID"]."</td></tr>";
        echo "<tr><td> ชื่อหนังสือ : </td><td>".$data["BookName"]."</td></tr>";
        echo "<tr><td> สำนักพิมพ์ : </td><td>".$data["Publish"]."</td></tr>";
        echo "<tr><td> ราคาซื้อ : </td><td>".$data["UnitPrice"]."</td></tr>";
        echo "<tr><td> ราคาเช่า : </td><td>".$data["UnitRent"]."</td></tr>"; 
        echo "</table>";
    ?>

    <br>
    <div align = "center">
        <input type="submit" name="Submit" value="แก้ไขข้อมูล" style="cursor:hand">
        <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
    </div>
    </form>
    <div align = "center"> <a href="listofbook2.php">กลับหน้าหลัก</a></div><br> 
</body>
</html>
