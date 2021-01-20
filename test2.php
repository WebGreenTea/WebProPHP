<?php  
$x =100;
$y = 10;
$oper = "-";

switch ($oper) {
    case "+":
        plus($x,$y);
        break;
    case "-":
        sub($x,$y);
        break;
    case "*":
        mul($x,$y);
        break;
    case "/":
        div($x,$y);
        break;
    default:
    echo "ERROR!!";

}

function plus($x,$y){
    echo "<h1>"."x + y =".($x+$y)."<br></h1>";
}
function sub($x,$y){
    echo "<h1>"."x - y =".($x-$y)."<br></h1>";
}
function mul($x,$y){
    echo "<h1>"."x * y =".($x*$y)."<br></h1>";
}
function div($x,$y){
    echo "<h1>"."x / y =".($x/$y)."<br></h1>";
}

/*if($oper == "+"){
    plus($x,$y);
}
else if($oper == "-"){
    sub($x,$y);
}
else if($oper == "*"){
    mul($x,$y);
}
else if($oper == "/"){
    div($x,$y);
}*/











?>