<!DOCTYPE HTML>
<html>  
<body>

    
    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operator = $_GET["operator"];
        $result = 0;
        
        switch ($operator){
            case ('+');
            $result = $num1 + $num2;
            break;

            case ('-');
            $result = $num1 - $num2;
            break;

            case ('*');
            $result = $num1 * $num2;
            break;

            case ('/');
            $result= $num1 / $num2;
            break;
        default:
        }
        
    echo "Num X :" .$num1. "<br>";
    echo "Num Y :" .$num2. "<br>";
    echo "Operator :" .$operator. "<br>";
    echo "Show Result : " .$result. "<br>";
        
    ?>
</body>
</html>

