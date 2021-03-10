<?php
$funArray=array("A","B","C","D");
print_r($funArray);//แสดงผล([0] => A [1] => B [2] => C [3] => D )

echo "<br>";
for($i = 0;$i < count($funArray);$i++){
    echo "index[".$i."]".$funArray[$i]."<br>";
}

echo "<br>test for each<br>";
foreach($funArray as $value){
    echo $value."<br>";
}

?>