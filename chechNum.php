<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        <table border="0" align="center" width="500">

    <tr>
        <td> ค่าเริ่มต้น : </td>
        <td><input type="text" name="num1" size="15" value=""/></td>
    </tr>
    </tr>
        <td> ค่าสุดท้าย : </td>
        <td><input type="text" name="num2" size="15" value=""/></td>
    </tr>
    <tr>
        <td> ตัวเลขที่นำไปหาร : </td>
        <td><input type="text" name="num3" size="15" value=""/></td>
    </tr>
        <td colspan="2" align="center">
        <input type="submit" name= "CheckNum" value="Check Num" />
        </td>
    </tr>
</table>
</form>
</body>
</html>
<center>
<?php
    function check_num(){
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $num3=$_POST["num3"];
            $arr=[];
            $count=0;
            for($num1;$num1<=$num2;$num1++){
                if($num1 % $num3 == 0){
                    $arr[]=$num1;
                    $count++;
                }


            }

            for($i=0;$i<count($arr);$i++){

                echo $arr[$i]," , ";
                
            }
            echo "<br> จำนวนที่หารลงตัว : ";
            countNum($count);
            echo "<br> ผมรวมตัวเลขที่หารลงตัว : ";
            sumNum($arr);
            
    }

    function countNum($count){
       echo $count;
    }

    function sumNum($arr){
        $sum=0;
            for($i=0;$i<count($arr);$i++){

                $sum+=$arr[$i];
            }
        echo $sum;

    }
    if(isset($_POST["CheckNum"])){
        check_num();
    }
    
?></center>