<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action="testarray2.php" >
        <table>
            <?php
            for($i = 0 ; $i < 10 ; $i++){
                echo "<tr>";
                echo "<td><input  name= name[]  placeholder = 'Enter Car Name'></td> ";
                echo "</tr>";
            }
            
                
            ?>
                <tr><td >
                <button name ="submit" >Submit Information</button>
                </td></tr>
        </table>
    </form>
    <?php
    if (isset($_POST["submit"])) {
    $cars = $_POST['name'];
    foreach($cars as $showCar):
        echo $showCar."<br>";
    endforeach;
    print_r($cars);
}
    ?>
</body>
</html>