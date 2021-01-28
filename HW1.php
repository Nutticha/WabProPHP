<!DOCTYPE HTML>
<html>  
<body>

<center>
        <h1> HW1 : Find Min Max Average </h1>

        <form action="HW1.php" method="get">
            <p>
                Num 1 : <input type="text" name="num1"><br>
            </p>
            
            
            <p>
                Num 2 : <input type="text" name="num2"><br>

            </p>
           
            <p>
                Num 3 : <input type="text" name="num3"><br>
            </p>

            <p>
                <input type="radio" name="operator1" value="Minimum"> Minimum <br>
                <input type="radio" name="operator1" value="Maximum"> Maximum<br>
                <input type="radio" name="operator1" value="Average"> Average<br>
                
    
            </p>
            
            <input name="submit" type="submit">
            
        </form>
    </center>

    <?php
    if(isset($_GET['submit'])){
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];
        $operator = $_GET["operator1"];
        $result = 0;
        $min = 0;
        $max = 0;
        switch ($operator){
            case ('Minimum') :
           
            $min = min($num1,$num2,$num3) ;  
            echo "Minimum number : ".$min."<br>";
            break;

            case ('Maximum');

            $max = max($num1,$num2,$num3) ;
            echo "<center><br>Maximum number : ".$max."<br><center>";
            break;

            case ('Average');

            $result = ($num1 + $num2 + $num3) / 3;
            echo "Average : " .$result. "<br>";
            
            break;
        }
    }  
    ?>
        
</body>
</html>

