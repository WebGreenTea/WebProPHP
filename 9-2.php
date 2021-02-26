<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-2 </title>
</head>

<body>
    <form method="get" action="#" style="text-align: center;">
        จำนวนนักเรียน : <input type="number" required name="stu">
        <input type="submit" name="submit" value="ตกลง">
    </form>
    <?php if (isset($_GET['submit'])) {
        $stu = $_GET['stu'];
        $MaxStudent = $stu;
        $max = 0;
        $stumax = 0;
        $min = 0;
        $stumin = 0;
        $score = array();
        $A = 0;
        $B = 0;
        $C = 0;
        $D = 0;
        $F = 0;
        for ($n = 0; $n < $MaxStudent; $n++) {
            $score[$n] = rand(0, 100);
            if($score[$n]>$max){
                $max = $score[$n];
                $stumax = $n+1;
            }
            if($n == 0){
                $min = $score[$n];
                $stumin = $n+1;
            }
            else{
                if($score[$n]<$min){
                    $min = $score[$n];
                    $stumin = $n+1;
                }
            }
            

        }
        echo '<center><font size="4" color="blue"> Grade Report </font></center>';
        echo '<table border="1" align="center">';
        echo '<tr><td align="center" width="90">Student No.</td>';
        echo '<td align="center" width="90">Score</td>';
        echo '<td align="center" width="90">Grade</td></tr>';
        for ($n = 0; $n < $MaxStudent; $n++) {
            $grade = checkgrade($score[$n]);
            echo '<tr><td align="center" width="90">' . ($n + 1) . '</td>';
            echo '<td align="center" width="90">' . $score[$n] . '</td>';
            echo '<td align="center" width="90">';
            echo $grade;
            echo '</td></tr>';
            if($grade === "A"){
                $A++;
            }
            else if($grade === "B"){
                $B++;
            }
            else if($grade === "C"){
                $C++;
            }
            else if($grade === "D"){
                $D++;
            }
            else {
                $F++;
            }
            
        }
        echo '<tr><td colspan="3" align="center"> Average Score : ';
        echo average($score, $MaxStudent);
        echo '</td></tr>';
        echo '<tr><td colspan="3" align="center">';
        //echo $max.' Student: '.$stumax;
        echo 'นักเรียนคนที่ '.$stumax .' ได้คะแนนสูงสุด '.$max;
        echo '</td></tr>';
        echo '<tr><td colspan="3" align="center">';
        //echo $min.' Student: '.$stumin;
        echo 'นักเรียนคนที่ '.$stumin .' ได้คะแนนต่ำสุด '.$min;
        echo '<tr><td colspan="3" align="center">';
        echo ' A: '.$A.' คน';
        echo '</td></tr>';echo '<tr><td colspan="3" align="center">';
        echo ' B: '.$B.' คน';
        echo '</td></tr>';echo '<tr><td colspan="3" align="center">';
        echo ' C: '.$C.' คน';
        echo '</td></tr>';echo '<tr><td colspan="3" align="center">';
        echo ' D: '.$D.' คน';
        echo '</td></tr>';echo '<tr><td colspan="3" align="center">';
        echo ' F: '.$F.' คน';
        echo '</td></tr></table>';
        
        
    }
    function average($data, $max)
        {
            $total = 0;
            for ($n = 0; $n < $max; $n++) {
                $total += $data[$n];
            }
            return ($total / $max);
        }
    function checkgrade($score){
        if($score >= 80){
            return "A";
        }
        else if($score >= 70 ){
            return "B";
        }
        else if($score >= 60){
            return "C";
        }
        else if($score >= 50){
            return "D";
        }
        else{
            return "F";
        }
    }
    ?>
</body>

</html>