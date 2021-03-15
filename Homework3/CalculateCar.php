<?php
$cars = $_POST['cars'];

if (isset($_POST['submit'])) {
    $amt = $_POST['amt'];

    if ($cars == "Accord") {
        $price = 1799000;
        $dokbeer = 2.00;
    }
    if ($cars == "Civic") {
        $price = 1145000;
        $dokbeer = 2.00;
    }
    if ($cars == "Jazz") {
        $price = 754000;
        $dokbeer = 4.00;
    }
    if ($cars == "City") {
        $price = 749000;
        $dokbeer = 4.00;
    }

    if ($_POST['down'] == 1) {
        $downamt = $_POST['downamt1'];
    }
    if ($_POST['down'] == 2) {
        $downamt = $_POST['downamt2'];
    }
}

function DownPayment($price, $downamt)
{
    return $price * ($downamt / 100);
}
function  installment($price, $downamt)
{
    return $price - $downamt;
}
function interestYear($install, $dokbeer)
{
    return $install * ($dokbeer / 100);
}
function interestTotal($dokbeeryrl, $amt)
{
    return $dokbeeryrl * ($amt / 12);
}
function payMonth($install, $interest, $amt)
{
    return ($install + $interest) / $amt;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table align="center" border="0">
        <tr>
            <td>
                <table align="center" border="0">
                    <?php
                    if ($cars == "Accord") {
                        echo "<tr><td align='center'><img src='Pic/logo-accord.png'></td></tr>";
                        echo "<tr><td align='center'><img src='Pic/Accord.png'></td></tr>";
                    }
                    if ($cars == "Civic") {
                        echo "<tr><td align='center'><img src='Pic/logo-civic.png'></td></tr>";
                        echo "<tr><td align='center'><img src='Pic/Civic.png'></td></tr>";
                    }
                    if ($cars == "Jazz") {
                        echo "<tr><td align='center'><img src='Pic/logo-jazz.png'></td></tr>";
                        echo "<tr><td align='center'><img src='Pic/jazz.png'></td></tr>";
                    }
                    if ($cars == "City") {
                        echo "<tr><td align='center'><img src='Pic/logo-city.png'></td></tr>";
                        echo "<tr><td align='center'><img src='Pic/City.png'></td></tr>";
                    }
                    ?>
                </table>
            </td>
            <td>
                <table align="center" border="0">
                    <tr>
                        <td>
                            <form method="POST">
                                <fieldset>
                                    <legend>เลือกเงินดาวน์</legend>
                                    <table border="0">
                                        <tr>
                                            <td>
                                                เงินดาวน์
                                                <input type="radio" name="down" value=1>
                                                <select name="downamt1">
                                                    <option value="15">15%</option>
                                                    <option value="20">20%</option>
                                                    <option value="25">25%</option>
                                                    <option value="30">30%</option>
                                                </select>
                                                หรือ ระบุจำนวนเงิน <input type="radio" name="down" value=2>
                                                <input type="number" name="downamt2">
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset>
                                    <legend>เลือกระยะเวลาผ่อนชำระ</legend>
                                    <table border="0">
                                        <tr>
                                            <td>
                                                ระยะเวลางวด
                                                <select name="amt">
                                                    <option value="36">36</option>
                                                    <option value="48">48</option>
                                                    <option value="60">60</option>
                                                    <option value="72">72</option>
                                                    <option value="84">84</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <input type="text" hidden name="cars" value="<?= $cars ?>">
                                <center><button type="submit" name="submit">Calculate</button></center>
                            </form>
                        </td>
                    </tr>
                    <tr height="10px"></tr>
                    <?php
        if (isset($_POST['submit'])) {
        ?>
            <tr>
                <td>
                    <table border="1" align="center">
                        <tr>
                            <td colspan="2" align="center ">รายงานการคํานวณสินเชื่อผ่อนชำระ</td>
                        </tr>
                        <tr>
                            <td>รุ่นรถยนต์: </td>
                            <td><?= $cars ?> </td>
                        </tr>
                        <tr>
                            <td>ราคารถยนต์: </td>
                            <td><?= number_format($price) ?> บาท</td>
                        </tr>
                        <tr>
                            <td>(1) เงินดาวน์: </td>
                            <td><?=number_format( DownPayment($price, $downamt)) ?> บาท (<?= $downamt ?>%) </td>
                        </tr>
                        <tr>
                            <td>(2) จํานวนเงินที่ขอสินเชื่อ: </td>
                            <td><?= number_format(installment($price, DownPayment($price, $downamt))) ?> บาท</td>
                        </tr>
                        <tr>
                            <td>(3) ดอกเบี้ย: </td>
                            <td><?= number_format(interestYear(installment($price, DownPayment($price, $downamt)), $dokbeer)) ?> บาท (<?=$dokbeer?>% ต่อปี)</td>
                        </tr>
                        <tr>
                            <td>(4) ดอกเบี้ย ทั้งหมด <?= $amt / 12 ?>ปี (<?=$amt?> งวด):
                            </td>
                            <td><?= number_format(interestTotal(interestYear(installment($price, DownPayment($price, $downamt)), $dokbeer), $amt)) ?> บาท</td>
                        </tr>
                        <tr>
                            <td>(5) จำนวนเงินที่ต้องผ่อน ต่อ 1 งวด: </td>
                            <td><?= number_format(ceil(payMonth(installment($price, DownPayment($price, $downamt)), interestTotal(interestYear(installment($price, DownPayment($price, $downamt)), $dokbeer), $amt), $amt))) ?> บาท</td>
                        </tr>
                    </table>
                </td>
            </tr>
        <?php } ?>
                </table>
            </td>
        </tr>
        
    </table>
</body>

</html>