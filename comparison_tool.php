<div>
    <form action="" method="post">
        <form action="" method="post">
            <label for="">Enter Number 1:</label>
            <input type="text" name="number1">
            </br>
            <label for="">Enter Number 2 :</label>
            <input type="text" name="number2">
            </br>
            <button type="submit">Compare</button>

        </form>
        <div id=result>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){

                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];
                $largerNumber = ($number1 > $number2) ? $number1 : $number2;
                echo"<b>The larger number is: $largerNumber</b>";
            }

            ?>
        </div>

</div>