<div>
    <h2>Calculator</h2>
    <form action="" method="post">
        <label for="">First Number:</label>
        <input type="text" name="number1">
        </br>
        <label for="">Second Number:</label>
        <input type="text" name="number2">
        </br>
        <label for="operation">Select an operation</label>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="sub">Straction</option>
            <option value="multiply">Multiplication</option>
            <option value="division">Division</option>

        </select></br>
        <button type="submit">Calculate</button>
    </form>
    <div id=result>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = floatval($_POST['number1']);
            $number2 = floatval($_POST['number2']);
            $operation = $_POST["operation"];
            $result = 0;

            switch($operation){
                case 'add':
                    $result = $number1 + $number2;
                    break;
                case 'sub':
                    $result = $number1 - $number2;
                    break;
                case 'multiply':
                    $result = $number1 * $number2;
                    break;
                case 'division':
                    if($number2 != 0){

                        $result = $number1 / $number2;
                    }else{
                        echo"Error";
                    }
                    break;
                default:
                    echo"Invalid operation";
                    break;
            }
            echo"<h2>Result : $result</h2>";
            


        }
        ?>
    </div>
</div>