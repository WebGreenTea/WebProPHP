<html>
<head><title>การก าหนดค่าตัวแปร</title></head>
<body>
<?php
    $x = 100;
    $y = "200";
    $z = '300';
    $add = $x + $y;
    $sub = $z - $x;
    $muti = $y * $z;
    $message = "Hello World";
    echo $x; echo "<br />";
    echo $y; echo "<br />";
    echo $z; echo "<br />";
    echo "ผลบวก ".$x." + ".$y."=".$add; echo "<br />";
    echo "ผลลบ ".$z." - ".$x."=".$sub; echo "<br />";
    echo "ผลคูณ ".$y." x ".$z."=".$muti; echo "<br />";
    $div = $muti/$z;
    echo "ผลหาร ".$muti." / ".$z."=".$div; echo "<br />";
    echo $message; echo "<br />";
?>
</body>
</html>