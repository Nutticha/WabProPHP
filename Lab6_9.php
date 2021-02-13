<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 9 </title></head>
</head>
<body>
<form action="#" method="get">
        Start Num:<input type="text" name="start" ><br>
        End Num : <input type="text" name="end" ><br>
        Divide : <input type="text" name="div" ><br>

        <input type="submit" value="submit"><br><br>
<?php

       $start = $_GET["start"];
       $end   = $_GET["end"];
       $div   = $_GET["div"];

      do{
          if($start % $end){
                 echo $start.",";
          }
          $start ++;

      }while($end < $start);

        /*$found = false;
        for($num = 100 ; $num <= 200 ; $num++) {
            if ($num % 13 == 0) {
            $found = true;
            break;
        }
    }       
    if ($found){
        echo "เลขจ านวนเต็มที่อยู่ในช่วง 100 ถึง 200 ที่น้อยที่สุดและหารด้วย 13 ลงตัวคือ $num<br>";
    }
        
    else{
        echo "ไม่มีเลขจ านวนเต็มที่อยู่ในช่วง 100 ถึง 200 ที่น้อยที่สุดและหารด้วย 13 ลงตัว<br>";
    }*/
        
?>
</body>
</html>