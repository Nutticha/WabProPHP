<?php
$name = $_POST["name"];
$money = $_POST["money"];
$month = $_POST["month"];
$total = $money * $month;

function carCheck($total)
{
    if ($total < 749000) {
        echo ("<td align=center colspan=2>ยอดเงินของท่าน ไม่เพียงพอ ที่จะซื้อรถยนต์ได้</td>");
    } else {
        echo ("<td align=center colspan=2>รถยนต์รุ่นที่ท่านสามารถเลือกซื้อได้</td>");
        if ($total >= 749000) { ?>
            <tr>
                <td>
                    <table border="0">
                        <tr>
                            <td style="width:550px"><img border="0" src="img/City.png" width="100%"></td>
                            <td style="width:200px" valign="bottom"><img border="0" src="img/logo-city.png" width="100%"></td>
                        </tr>
                    </table>
                </td>
                <td>
                    ราคา 749,000 บาท
                </td>
            </tr>
        <?php
        }
        if ($total >= 849000) { ?>
            <tr>
                <td>
                    <table border="0">
                        <tr>
                            <td style="width:550px"><img border="0" src="img/Jazz.png" width="100%"></td>
                            <td style="width:200px" valign="bottom"><img border="0" src="img/logo-jazz.png" width="100%"></td>
                        </tr>
                    </table>
                </td>
                <td>
                    ราคา 849,000 บาท
                </td>
            </tr>
        <?php
        }
        if ($total >= 1149000) { ?>
            <tr>
                <td>
                    <table border="0">
                        <tr>
                            <td style="width:550px"><img border="0" src="img/Civic.png" width="100%"></td>
                            <td style="width:200px" valign="bottom"><img border="0" src="img/logo-civic.png" width="100%"></td>
                        </tr>
                    </table>
                </td>
                <td>
                    ราคา 1,149,000 บาท
                </td>
            </tr>
        <?php
        }
        if ($total >= 1799000) { ?>
            <tr>
                <td>
                    <table border="0">
                        <tr>
                            <td style="width:550px"><img border="0" src="img/Accord.png" width="100%"></td>
                            <td style="width:200px" valign="bottom"><img border="0" src="img/logo-accord.png" width="100%"></td>
                        </tr>
                    </table>
                </td>
                <td>
                    ราคา 1,799,000 บาท
                </td>
            </tr>
<?php
        }
    }
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
    <form method="POST" action="CarPay.php">
        <table border="1" align="center">
            <tr>
                <td>ชื่อลูกค้า :</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>ผ่อนงวดละ :</td>
                <td><?= $money ?></td>
            </tr>
            <tr>
                <td>จำนวนงวด :</td>
                <td><?= $month ?></td>
            </tr>
            <tr>
                <td>ยอดรวมเงิน :</td>
                <td><?= $total ?></td>
            </tr>
            <tr>
                <?php
                carCheck($total);
                ?>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Back to Home</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>