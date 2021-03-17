<?php

$x = 100;
$y = 10;
$operator = '+' ;
//รูปแบบ if
/*if($operator == '+' ){
    plus();
}
else if($operator == '-' ){
    sub();
}
else if($operator == '*' ){
    mul();
}
else if($operator == '/' ){
    div();
}*/

//รูปแบบ switch
switch($operator){
    case  '+' : plus();
    break;
    case  '-' : sub();
    break;
    case  '*' : mul();
    break;
    case  '/' : div();
    break;
}

//บวก
function plus(){
   global $x;
   global $y;
    echo "x + y = " ; 
    echo $x + $y;
    echo "<br />";
    
}

//ลบ
function sub(){
    global $x;
    global $y;
    echo " x - y = ";
    echo $x - $y;
    echo "<br />";
}

//คูณ
function mul(){
    global $x;
    global $y;
    echo "x * y = ";
    echo $x * $y;
    echo "<br />";
}

//หาร
function div(){
    global $x;
   global $y;
    echo "x / y = ";
    echo $x / $y;
    echo "<br />";
}

/*plus();
sub();
mul();
div();*/

?>