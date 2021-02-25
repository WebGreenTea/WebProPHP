<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="cal_6206021610072.php" style="text-align: center;font-size: 25px">
        <select name="fruit" style="font-size: 25px;">
            <option value="มังคุด">มังคุด</option>
            <option value="ทุเรียน">ทุเรียน</option>
            <option value="แก้วมังกร">แก้วมังกร</option>
        </select>
        <br><br>ความกว้างของภาพ: <input type="number" name="width" required style="font-size: 25px;" min="100" max="500">
        <br><br><input type="radio" name="kg" value="1" id="1">
        <label for="1">1 kg.</label>
        <input type="radio" name="kg" value="2" id="2">
        <label for="2">2 kg.</label>
        <input type="radio" name="kg" value="3" id="3">
        <label for="3">3 kg.</label>
        <p>
        มังคุด กิโลกรัมละ 100 บาท
        </p>
        <p>
        ทุเรียน กิโลกรัมละ 200 บาท
        </p>
        <p>
        แก้วมังกร กิโลกรัมละ 300 บาท
        </p>
        <input type="submit" value="ตกลง" name="submit" style="font-size: 25px;">
    </form>
</body>

</html>