<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW2 : Sum of number</title>
</head>

<body>
    <h1 style="text-align: center;font-size: 50px">
        HW2 : Sum of number
    </h1>
    <form style="font-size: 30px;text-align: center" method="get" action="2.php">
        Num1:<input style="font-size: 30px;" type="number" name="num1" value="<?php echo $_GET['num1']; ?>" required><br><br>
        
        <input style="width: 25px;height: 25px;" type="radio" name="oper1" value="+"<?php if(isset($_GET['oper1'])){ if($_GET['oper1'] == "+"){echo "checked";}}?>> + :
        <input style="width: 25px;height: 25px;" type="radio" name="oper1" value="-"<?php if(isset($_GET['oper1'])){ if($_GET['oper1'] == "-"){echo "checked";}}?>> - :
        <input style="width: 25px;height: 25px;" type="radio" name="oper1" value="*"<?php if(isset($_GET['oper1'])){ if($_GET['oper1'] == "*"){echo "checked";}}?>> * :
        <input style="width: 25px;height: 25px;" type="radio" name="oper1" value="/"<?php if(isset($_GET['oper1'])){ if($_GET['oper1'] == "/"){echo "checked";}}?>> / :
        <br><br>

        Num2:<input style="font-size: 30px;" type="number" name="num2" value="<?php echo $_GET['num2']; ?>" required><br><br>

        <input style="width: 25px;height: 25px;" type="radio" name="oper2" value="+"<?php if(isset($_GET['oper2'])){ if($_GET['oper2'] == "+"){echo "checked";}}?>> + :
        <input style="width: 25px;height: 25px;" type="radio" name="oper2" value="-"<?php if(isset($_GET['oper2'])){ if($_GET['oper2'] == "-"){echo "checked";}}?>> - :
        <input style="width: 25px;height: 25px;" type="radio" name="oper2" value="*"<?php if(isset($_GET['oper2'])){ if($_GET['oper2'] == "*"){echo "checked";}}?>> * :
        <input style="width: 25px;height: 25px;" type="radio" name="oper2" value="/"<?php if(isset($_GET['oper2'])){ if($_GET['oper2'] == "/"){echo "checked";}}?>> / :
        <br><br>
        Num3:<input style="font-size: 30px;" type="number" name="num3" value="<?php echo $_GET['num3']; ?>" required><br><br>



        <button style="font-size: 25px;" type="submit" name="submit">submit</button>
    </form>

    <p style="font-size: 30px;text-align: center">
        <?php 
        if(isset($_GET['submit'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $num3 = $_GET['num3'];
            if((isset($_GET['oper1'])) && (isset($_GET['oper2']))) {
                $oper1 = $_GET['oper1'];
                $oper2 = $_GET['oper2'];
                $sum;
                if($oper1 == "+"){
                    $sum = ($num1+$num2);
                }
                else if($oper1 == "-"){
                    $sum = ($num1-$num2);
                }
                else if($oper1 == "*"){
                    $sum = ($num1*$num2);
                }
                else if($oper1 == "/"){
                    $sum = ($num1/$num2);
                }

                if($oper2 == "+"){
                    $sum+=$num3;
                }
                else if($oper2 == "-"){
                    $sum-=$num3;
                }
                else if($oper2 == "*"){
                    $sum*=$num3;
                }
                else if($oper2 == "/"){
                    $sum/=$num3;
                }
                echo "Sum of number = $sum";
                
            }
        }
        
        ?>
    </p>
</body>

</html>