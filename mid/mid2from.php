<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<form method="post" action="mid2cal.php">
    <table border="1" align="center" width="400">
        <tr>
            <td colspan="2" align="center">
            <strong> X-O </strong>
            </td>
        </tr>
        <tr>
        <td align="center" >Enter number row : </td>
        <td><input type="number" name="row" size="15" min = "3" max = "9" > </td>
        </tr>
        <tr>
        <tr>
        <td align="center">Enter number column : </td>
        <td><input type="number" name="column" size="15" min = "3" max = "9"></td>
        </tr>
        
        <tr>
        <td colspan="2" align="center">
        <input type="submit" value=" OK " >
        <input type="reset" value=" Clear " >
        </td>
        </tr>
    </table>
    </form>
    
</body>
</html>