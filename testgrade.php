<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        $score = 69;
        echo "Your score is $score<br>";
        echo "Your grade is ";
        if ($score >= 80) {
            echo "A";
        } else if ($score >= 70) {
            echo "B";
        } else if ($score >= 60) {
            echo "C";
        } else if ($score >= 50) {
            echo "D";
        } else {
            echo "F";
        }


        ?>
    </h1>
</body>

</html>