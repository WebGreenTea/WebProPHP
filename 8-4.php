<?php
// declare function page_header with argument and defualt value
function page_header($title, $bgcolor = "ffffff")
{
    echo '<html lang="en"><head><meta charset="UTF-8">';
    echo '<title>' . $title . '</title></head>';
    echo '<body bgcolor="#' . $bgcolor . '">';
}
// declare function page_footer
function page_footer($message = "ขอบคุณ")
{
    echo '<hr>' . $message;
    echo '</body></html>';
}
// declare function checker
function show_checker($maxRow, $maxCol, $bgcolor1, $bgcolor2,$start,$end)
{
    echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
    echo '<table align="center" border="1">';
    //$numoftable = array();
    $min =0;
    $max =0;
    $sum = 0;
    $count = 0;
    for ($r = 1; $r <= $maxRow; $r++) {
        echo '<tr >';
        for ($c = 1; $c <= $maxCol; $c++) {
            if ($r % 2 == 1) {
                echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor1 : $bgcolor2) . '">';
            } else {
                echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
            }
            $num =rand($start,$end); 
            echo $num . '</td>';
            $sum+=$num;
            $count++;
            if($count == 1){
                $min = $num;
                $max = $num;
            }
            else{
                $min = newmin($min,$num);
                $max = newmax($max,$num);
            }
            //$min = $num;
            //array_push($numoftable,$num);
        }
        echo '</tr>';
    }
    echo '</table>';
    //if ($maxRow == $maxCol) $message = "This is Square";
    //else $message = "This is Rectangle";
    //echo "<p align='center'> $message </p>";
    //echo $sum/($maxCol*$maxRow);
    echo "average = ".(newaverage($sum,($maxCol*$maxRow)))."<br>";
    echo "minimum = ".$min."<br>";
    echo "maximum = ".$max."<br>";
    
}
function newmin($num1,$num2){
    /*$min = $num[0];
    for($i = 1;$i<(count($num));$i++){
        if($num[i]< $min){
            $min = $num[i];
        }
    }
    return $min;*/
    if($num2<$num1){
        return $num2;
    }
    return $num1;

}
function newmax($num1,$num2){
    if($num2>$num1){
        return $num2;
    }
    return $num1;

}
function newaverage($sum,$divi){
    $res = $sum/$divi;
    return $res;
}
if(isset($_GET['submit'])){
    
    page_header("Example 8-4", "FFDDEE");
    show_checker($_GET['row'], $_GET['col'], "33ff99", "ffff99",$_GET['start'],$_GET['end']);
    //page_footer("Thank You.");
}
