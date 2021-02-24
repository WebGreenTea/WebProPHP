<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if (isset($_GET['submit'])) {
        $fruit = $_GET['fruit'];
        $width = $_GET['width'];
        $kg = $_GET['kg'];
        if($fruit === "มังคุด"){
            echo "<center>";
            echo '<img  src="image/มังคุด.jpg" alt="" style="width: '.$width.'px;">';            
            echo "</center><br><br>";
            echo '<p style="font-size:25px; text-align:center;">';
            echo "มังคุด ราคากิโลกรัมละ 100 บาท<br>";
            echo 'จำนวน '.$kg.' กิโลกรัม ราคารวม '.($kg*100) .' บาท';
            echo '</p>';
        }
        elseif ($fruit === "ทุเรียน"){
            echo "<center>";
            echo '<img  src="image/ทุเรียน.jpg" alt="" style="width: '.$width.'px;">';
            echo "</center><br><br>";
            echo '<p style="font-size:25px; text-align:center;">';
            echo "ทุเรียน ราคากิโลกรัมละ 200 บาท<br>";
            echo 'จำนวน '.$kg.' กิโลกรัม ราคารวม '.($kg*200) .' บาท';
            echo '</p>';
        }
        elseif($fruit === "แก้วมังกร"){
            echo "<center>";
            echo '<img  src="image/แก้วมังกร.jpg" alt="" style="width: '.$width.'px;">';
            echo "</center><br><br>";
            echo '<p style="font-size:25px; text-align:center;">';
            echo "แก้วมังกร ราคากิโลกรัมละ 300 บาท<br>";
            echo 'จำนวน '.$kg.' กิโลกรัม ราคารวม '.($kg*300) .' บาท';
            echo '</p>';
        }
    } else {
        header('location: form.php');
    } ?>
</body>

</html>