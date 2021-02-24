<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="cal.php">
    <p>
                Width : <input type="number" name="width" min = "100" max = "500"><br>
    </p>
    <p>
    เลือกผลไม้ : <select name="fruit" id="" onchange="">
                <option value="banana" >กล้วย</option>
                <option value="strawberry" >สตอเบอรี่</option>
                <option value="orange" >ส้ม</option>
                
              </select>
    </p>
    <p>
    จำนวนกิโล : <input type="radio" name="kg" value="1"> 1 kg 
            <input type="radio" name="kg" value="2"> 2 kg 
            <input type="radio" name="kg" value="3"> 3 kg 
            

            </p>
    <input type="submit">
    <h1> กล้วย ราคากิโลละ 100 บาท </h1>
    <h1> สตอเบอรี่ ราคากิโลละ 200 บาท </h1>
    <h1> ส้ม ราคากิโลละ 300 บาท </h1>
    </form>
</body>
</html>