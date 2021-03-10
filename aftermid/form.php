<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
    <table border="1">
    <?php for($i = 1;$i<=10;$i++){
        echo '<tr><td><input placeholder="Enter name" name="name[]" type="text"></td></tr>';
    }?>
    <tr><td><input type="submit" value="submit information" name="submit"></td></tr>
    </table>
    </form>

    <?php if(isset($_POST['submit'])):?>
        <?php 
        $arr = $_POST['name'];
        foreach($arr as $value){
            echo $value.'<br>';
        }
        ?>
    <?php endif ?>
</body>
</html>