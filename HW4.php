<?php

$name1 = $_POST['name1'];
echo $name1;
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];
$name4 = $_POST['name4'];
$name5 = $_POST['name5'];
$git1 = $_POST['num1'];
$git2 = $_POST['num2'];
$git3 = $_POST['num3'];
$git4 = $_POST['num4'];
$git5 = $_POST['num5'];
$grade1 = $_POST['grade'];
$grade2 = $_POST['grade1'];
$grade3 = $_POST['grade2'];
$grade4 = $_POST['grade3'];
$grade5 = $_POST['grade4'];
$result = 0;

echo "Name subject1 : $name1 <br>";
echo "Unit : $git1 <br>";
echo "Grade : $grade1 <br><hr>";

echo "Name subject2 : $name2 <br>";
echo "Unit : $git2 <br>";
echo "Grade : $grade2 <br><hr>";

echo "Name subject3 : $name3 <br>";
echo "Unit : $git3 <br>";
echo "Grade : $grade3 <br><hr>";

echo "Name subject4 : $name4 <br>";
echo "Unit : $git4 <br>";
echo "Grade : $grade4 <br><hr>";

echo "Name subject5 : $name5 <br>";
echo "Unit : $git5 <br>";
echo "Grade : $grade5 <br><hr>";
$mild = ($git1*$grade1)+($git2*$grade2)+($git3*$grade3)+($git4*$grade4)+($git5*$grade5);
$jeab = ($git1+$git2+$git3+$git4+$git5);
$result = $mild/$jeab;
echo "GPA : ".round($result,2) ."<hr>";

