<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-2 </title>
</head>
<body>
<form method="post" action="Lab9_2.php">
    <table border="1" align="center" width="400">
        <tr>
            <td colspan="2" align="center">
            <strong> Grade </strong>
            </td>
        </tr>
        <tr>
        <td align="right">จำนวนนักเรียน : </td>
        <td><input type="number" name="nums" size="15" > </td>
        </tr>
        <tr>
        <td colspan="2" align="center">
        <input type="submit" value=" OK " >
        <input type="reset" value=" Clear " >
        </td>
        </tr>
    </table>
    </form>
<?php

  $nums = $_POST['nums'];
  /*$MaxStudent = 10;*/
  $score = array();
    for($n = 0 ; $n < $nums; $n++) {
        $score[$n] = rand(0, 100);
    }
    echo '<center><font size="4" color="blue"> Grade Report </font></center>';
    echo '<table border="1" align="center">';
    echo '<tr><td align="center" width="90">Student No.</td>';
    echo '<td align="center" width="90">Score</td>';
    echo '<td align="center" width="90">Grade</td></tr>';
    for($n = 0 ; $n < $nums; $n++) {
        echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
        echo '<td align="center" width="90">' . $score[$n] . '</td>';
        echo '<td align="center" width="90">' . $grade . '</td></tr>';
    }
    echo '<tr><td colspan="3" align="center"> Average Score : ';
    echo average( $score, $nums);
    echo '<tr><td colspan="3" align="center"> Max Score :  ' .max($score);
    echo '<tr><td colspan="3" align="center"> Min Score : '.min($score);

    
    echo '</td></tr></table>';
    echo '<table border="1" align="center">';
    echo '<tr><td align="center" width="90">Grade</td>';
    echo '<td align="center" width="90">จำนวน</td>';
    for($i = 0 ; $i <= 4 ; $i++){
        $score1 = array(0,0,0,0,0);
        $score2 = array('A' , 'B' , 'C' , 'D' , 'F');
        
        
        echo'<tr><td colspan="1" align="center">'.$score2[$i].'</td>';
        echo'<td colspan="1" align="center">'.$score1[$i].'</td></tr>';
    }
    echo '</table>';
    if($score[$n] >= 80){
        $score1[0]++; 
        $grade = "A";
    }
    else if($score[$n] >= 70){
        $score1[1]++;
        $grade = "B";
    }
    else if($score[$n] >= 60){
        $score1[2]++;
        $grade = "C";
    }
    else if($score[$n] >= 50){
        $score1[3]++;
        $grade = "D";
    }
    elseif($score[$n] >= 49) {
        $score1[4]++;
        $grade = "F";
    }
    function average($data, $max) {
        $total = 0;
        for($n = 0 ; $n < $max; $n++) {
            $total += $data[$n];
        }
        return( $total / $max );
        }
    
    
    ?>
    </body>
    </html>