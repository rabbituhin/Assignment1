<div>
    <h2>Grade Calculator</h2>
    <form  action="" method ="post">
        <label for="">Test Score 1:</label>
        <input type="text" name="score1">
    </br>
        <label for="">Test Score 2:</label>
        <input type="text" name="score2">
    </br>
        <label for="">Test Score 3:</label>
        <input type="text" name="score3">
    </br>

        <button type="submit">Calculate</button>

    </form>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];
        $average = ($score1 + $score2 + $score3) / 3;
        $grade = '';

       
        if ($average >= 80) {
            $grade = 'A';
        } elseif ($average >= 70) {
            $grade = 'B';
        } elseif ($average >= 60) {
            $grade = 'C';
        } elseif ($average >= 50) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }
        if ($average !== '' && $grade !== '') {
            echo "<h2>Result:</h2>";
            echo "Average Score: $average<br>";
            echo "Letter Grade: $grade";
        }
    }
    ?>
</div>