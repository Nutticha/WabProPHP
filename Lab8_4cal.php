<?php
$maxRow = $_POST['row'];
$maxCol= $_POST['column'];
$start = $_POST['start'];
$end = $_POST['end'];
$nmin = 0;
$nmax = 0;
$navg = 0;

/*$maxRow = intval( $row);
$maxCol = intval( $column);*/

// declare function page_header with argument and defualt value
function page_header($title, $bgcolor = "ffffff") {
    echo '<html lang="en"><head><meta charset="UTF-8">';
    echo '<title>' . $title . '</title></head>';
    echo '<body bgcolor="#'. $bgcolor . '">';
}
// declare function page_footer
function page_footer($message = "ขอบคุณ") {
    echo '<hr>' . $message ;
    echo '</body></html>';
}
function minnum($min , $random){
    if ($min < $random){
        return $min;
    }
    return $random;
}

function maxnum( $max , $random){
    if ($max > $random){
        return $max;
    }
    return $random;
}
function average($num , $total){
    $total = $total/$num;
    echo "Average : $total";

}

// declare function checker
function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2 ,$start , $end ) {
    echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
    
    echo '<table align="center" border="1">' ;
    for($r = 1; $r <= $maxRow; $r++) {
        $total = 0;
        echo '<tr >';
        for($c = 1; $c <= $maxCol; $c++) {
            
            if ( $r % 2 == 1) {
            echo '<td bgcolor="#' . (($c % 2 == 1)?$bgcolor1:$bgcolor2) . '">';
            }
            else {
        echo '<td bgcolor="#' . (($c % 2 != 1) ? $bgcolor2 : $bgcolor1) . '">';
        }
        $random = rand($start , $end);
        if($r == 1){
            $min = $random;
            $max = $random;
        }
        echo "$random </td>";
        $total += $random;
        $min = minnum($min, $random);
        $max = maxnum($max, $random);
    }
    echo '</tr>';
    
}

    echo '</table>';
    echo "Min:".$min.'<br>';
    echo "Max:".$max.'<br>';
    average($maxCol*$maxRow , $total);
if ($maxRow == $maxCol) $message = "This is Square";
else $message = "This is Rectangle";
echo "<p align='center'> $message </p>";
}

page_header("Example 8-4", "FFDDEE");
show_checker($maxRow, $maxCol,"33ff99","ffff99",  $start , $end);
page_footer("Thank You.");
?>