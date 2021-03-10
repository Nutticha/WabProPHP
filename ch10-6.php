<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 10-6 </title>
</head>
<body>
<?php
    // open file
    $fp = @fopen("City.png" , "rb");
    if ($fp) {
        $fpnew = @fopen("new_City.png" , "wb");
        while ($ln = @fread ($fp , 1024)) {
            fwrite($fpnew , $ln);
            }
            @fclose($fp);
            @fclose($fpnew );
            copy( "City.png", "City.png");
            echo "<h3>File Copy Finish...</h3>";
            echo "<image src='new_City.png' width='320' height='240'>";
        }
    else {
        die ("ไม่สามารถเปิดไฟล์ City.png ได้ !");
    }
?>
</body>
</html>