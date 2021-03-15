<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="CalculateCar.php" method = "post">
    
    <?php
       $car = $_POST["car"];

       if($car == 'Accord'){
           echo"<img src='Pic/logo-accord.png' alt='' align = 'left'>";echo"<br>";
           echo"<img src='Pic/Accord.png' alt=''>";
       }
       elseif($car == 'Civic'){
        echo"<img src='Pic/logo-civic.png' alt='' align = 'left'><img src='Pic/Civic.png' alt='' align = 'left'>";echo"<br>";
       }
       elseif($car == 'City'){
        echo"<img src='Pic/logo-city.png' alt='' align = 'left'><img src='Pic/City.png' alt='' align = 'left'>";echo"<br>";
       }
       elseif($car == 'Jazz'){
        echo"<img src='Pic/logo-jazz.png' alt='' align = 'left'><img src='Pic/Jazz.png' alt='' align = 'left'>";echo"<br>";
       }
    ?>

    <p>เลือกเงินดาวน์</p>
        <p>เงินดาวน์  <input type="radio" name="money" value="">
                <select name="p" id="" onchange="">
                <option value="15" >15%</option>
                <option value="20" >20%</option>
                <option value="25" >25%</option> 
                <option value="30" >30%</option> 
                </select> 
                หรือ <input type="radio" name="money" value="">
                จำนวนเงิน : <input type="number" name="m"> บาท
        </p>
    <p>เลือกระยะเวลาการผ่อนชำระ</p>
       <p>ระยะเวลา 
       <select name="t" id="" onchange="">
                <option value="36" >36</option>
                <option value="48" >48</option>
                <option value="60" >60</option> 
                <option value="72" >72</option>
                <option value="84" >84</option>  
                </select> งวด </p>
   <button type = "submit">Calculate</button>
  
</form>
</body>
</html>