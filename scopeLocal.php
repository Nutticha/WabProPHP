<?php

 $x = 5; //global
function mytest() {
    global $x;
    //$x = 5; //local scope
    echo "<p> Variable x inside function is : $x </p>";

}

mytest();

//$x = 4;
//using x outside

echo "<p> Variable x outside function is : $x </p>";
?>