<?php  
$x =100;
$y = 10;

function plus(){
    echo "<h1>"."x + y =".($GLOBALS['x'] + $GLOBALS['y'])."<br></h1>";
}
function sub(){
    echo "<h1>"."x - y =".($GLOBALS['x'] - $GLOBALS['y'])."<br></h1>";
}
function mul(){
    echo "<h1>"."x * y =".($GLOBALS['x'] * $GLOBALS['y'])."<br></h1>";
}
function div(){
    echo "<h1>"."x / y =".($GLOBALS['x'] / $GLOBALS['y'])."<br></h1>";
}
plus();
sub();
mul();
div();



?>