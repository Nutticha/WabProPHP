<html>
    <head><title>การก าหนดค่าตัวแปร</title></head>
    <body>
        <?php
           $x = 100;
           $y = "200";
           $z = '300';
           $add = $x + $y;
           $sub = $z - $x;
           $m   = $y * $z;
           $d   = $m / $z;
           $message = "Hello World";
           echo $x; echo "<br />";
           echo $y; echo "<br />";
           echo $z; echo "<br />";
           echo "ผลบวก ".$x." + " .$y. " = ".$add; echo "<br />";
           echo 'ผลลบ  '.$z.' - '.$y. ' =  '.$sub; echo "<br />";
           echo 'ผลคูณ  '.$y.' * '.$z.' = '.$m;echo "<br />";
           echo 'ผลหาร  '.$m.' / '.$z.' = '.$d;echo "<br />";
           echo $message; echo "<br />";
        ?>
    </body>
</html>