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

    <form method="post" action="CalculateCar.php">
    <img src="Pic/header.jpg" alt="" >
    <fieldset>
        <legend align="center">Car Model</legend>
    <p>
    เลือกรุ่นรถยนต์ : <select name="cars" id="" onchange="">
                <option value="Accord" >Accord</option>
                <option value="Civic" >Civic</option>
                <option value="Jazz" >Jazz</option>
                <option value="City" >City</option>
                
              </select>
              <input type="submit">
    </p>
    <table border="1" align="center">
        <tr>
            <td>ภาพรถยนต์</td>
            <td>รุ่นรถยนต์</td>
            <td>ราคารถยนต์(บาท)</td>
            <td>อัตราดอกเบี้ย ต่อปี(ร้อยละ,%)</td>
        </tr>
        <tr>
            <td align="center"><img src="Pic/Accord.png" alt="" width="100"></td>
            <td align="center">Accord</td>
            <td align="center">1,799,000</td>
            <td align="center">2.00</td>
        </tr>
        <tr>
            <td align="center"><img src="Pic/Civic.png" alt="" width="150"></td>
            <td align="center">Civic</td>
            <td align="center">1,145,000</td>
            <td align="center">2.00</td>
        </tr>
        <tr>
            <td align="center"><img src="Pic/Jazz.png" alt="" width="100"></td>
            <td align="center">Jazz</td>
            <td align="center">754,000</td>
            <td align="center">4.00</td>
        </tr>
        <tr>
            <td align="center"><img src="Pic/City.png" alt="" width="200"></td>
            <td align="center">City</td>
            <td align="center">749,000</td>
            <td align="center">4.00</td>
        </tr>
    </table>
    </fieldset>
    </form>
</center>
</body>
</html>
