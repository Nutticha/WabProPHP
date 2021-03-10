<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$maxRow = $_POST['row'];
$maxCol= $_POST['column'];


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

function grapheme($random){
    if($random < 0){
        echo "1 You win";
    }
    else if ($random < 1){
        echo "0 You win";
    }

}
// declare function checker
function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2  ) {
    echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
    
    echo '<table align="center" border="1">' ;
    $random = array();
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
        $random[$c] = rand(0 , 1);
        if($r == 1){
            $min = $random;
            $max = $random;
        }
        echo "$random[$c] </td>";
        
    }
    echo '</tr>';
    
}

    echo '</table>';
   /* grame($random);*/
    
}

page_header("X-O", "FFDDEE");
show_checker($maxRow, $maxCol,"33ff99","ffff99");
/*grame($random);*/
page_footer("Thank You.");
?>
</body>
</html>
