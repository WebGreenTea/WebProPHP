<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW3 : Cal Grade</title>
</head>

<body>
    <?php if (!isset($_GET['submit'])) : ?>
        <h1 style="text-align: center;font-size: 50px">
            HW3 : Cal Grade
        </h1>
        <form style="font-size: 30px;text-align: center" method="get" action="3.php">
            Final (0-30) :<input style="font-size: 30px;" min="0" max="30" type="number" name="final" required><br><br>
            Midterm (0-30) :<input style="font-size: 30px;" min="0" max="30" type="number" name="mid" required><br><br>
            Assignment (0-20) :<input style="font-size: 30px;" min="0" max="20" type="number" name="ass" required><br><br>
            Homework (0-20) :<input style="font-size: 30px;" min="0" max="20" type="number" name="hw" required><br><br>
            <input style="font-size: 25px;" type="submit" value="submit" name="submit">
        </form>
    <?php else:?>
        <?php $final = $_GET['final'];
        $mid = $_GET['mid'];
        $ass = $_GET['ass'];
        $hw = $_GET['hw'];
        $total = $final+$mid+$ass+$hw;
        ?>
        <h1>
            <?php echo "Final : $final<br>";
            echo "Midterm : $mid<br>";
            echo "Assignment : $ass<br>";
            echo "Homework : $hw<br>";
            echo "Total Score = $total<br>";
            echo "Your Grade is : ";
            if($total >= 80){
                echo "A";
            }
            else if($total >= 75){
                echo "B+";
            }
            else if($total >= 70){
                echo "B";
            }
            else if($total >= 65){
                echo "C+";
            }
            else if($total >= 60){
                echo "C";
            }
            else if($total >= 55){
                echo "D+";
            }
            else if($total >= 50){
                echo "D";
            }
            else{
                echo "F";
            }
            ?>
        </h1>
    <?php endif ?>

</body>

</html>