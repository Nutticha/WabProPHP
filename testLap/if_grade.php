<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $score = 100;

    if($score >= 80){
        $grade = "A";
    }
    else if($score >= 70){
        $grade = "B";
    }
    else if($score >= 60){
        $grade = "C";
    }
    else if($score >= 50){
        $grade = "D";
    }
    else {
        $grade = "F";
    }
    
    echo"Your score : ".$score ."<br> ";
    echo"Your grade : ".$grade;



?>

</body>
</html>