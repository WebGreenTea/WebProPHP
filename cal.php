<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <p>
            Show Result
        </p>
    <?php
        $x = $_GET['x'];
        $y = $_GET['y'];
        $oper = $_GET['operator'];
        echo "X = $x <br>";
        echo "Y = $y <br>";
        echo "Operator = $oper <br><br>";
        if($oper == '+'){
            echo "X + Y = ".($x + $y);
        }
        else if($oper == '-'){
            echo "X - Y = ".($x - $y);
        }
        else if($oper == '*'){
            echo "X * Y = ".($x * $y);
        }
        else if($oper == '/'){
            echo "X / Y = ".($x / $y);
        }
    ?>
    </h1>
</body>
</html>