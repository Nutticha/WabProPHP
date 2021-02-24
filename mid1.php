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
    <table align="center">     
        <tr>
            <td>กรุณาใส่ตัวอักษรหรือตัวเลข : </td>
            <td><input type="text" name="str" value=""></input></td> 
            <td><input type="submit" value=" Ok " name="ok" /></input></td>
        </tr>
        
           
        
    
    </table>
    
    <?php

        if(isset($_POST['ok'])){
        $str=$_POST["str"];
        $arr=str_split($str);
        $num=[];
        $ch=[];
        for($i=0;$i<count($arr);$i++){
            if(is_numeric($arr[$i])){
                $num[]=$arr[$i];
            }
            else{
                $ch[]=$arr[$i];
            }

        }

        for($i=0;$i<count($num);$i++){
            echo $num[$i];
        }
        for($i=0;$i<count($ch);$i++){
            echo $ch[$i];
        }

    }
       







    ?>

</form>
</body>



</html>