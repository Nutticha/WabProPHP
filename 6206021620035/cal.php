<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<?php
$fruit = $_GET['fruit'];
$width = $_GET['width'];
$kg = $_GET['kg'];
if($fruit == 'banana'){
    echo "<img src='img/กล้วย.jpg' alt='' width = '$width'>";echo '<br>';
    echo "ราคาผลไม้ต่อกิโล : 100";echo '<br>';
    echo " จำนวนกิโล :",$kg;echo '<br>';
    $sum = $kg * 100;
    echo "ราคารวม : $sum";
}
elseif($fruit == 'strawberry'){
    echo "<img src='img/สตอเบอรี่.jpg' alt='' width = '$width' >";echo '<br>';
    echo "ราคาผลไม้ต่อกิโล : 200";echo '<br>';
    echo " จำนวนกิโล :",$kg;echo '<br>';
    $sum = $kg * 200;
    echo "ราคารวม : $sum";

}
else{
    echo "<img src='img/ส้ม.jpg' alt='' width = '$width'>";echo '<br>';
    echo "ราคาผลไม้ต่อกิโล : 300";echo '<br>';
    echo " จำนวนกิโล :",$kg;echo '<br>';
    $sum = $kg * 300;
    echo "ราคารวม : $sum";
}


?>
</center>
</body>
</html>


