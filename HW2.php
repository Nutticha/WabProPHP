!<!DOCTYPE html>

<html>
    <head></head>
    <body>
    <?php
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     $num3 = $_GET["num3"];
     $operator = $_GET["operator"];
     $operator1 = $_GET["operator1"];
     $result = 0;

     if ($operator == "+")
        echo ($number1 + $number2) ;
    if ($operator == "-")
        echo ($number1 - $number2) ;
    if ($operator == "*")
        echo ($number1 * $number2) ;
    if ($operator == "/")
        echo ($number1 / $number2) ;
    if ($operator == "%")
        echo ($number1 % $number2) ;
    
    

    
    ?>
   
    </body>
</html>