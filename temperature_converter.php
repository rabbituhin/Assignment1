<div>
    <form method="post" action="">
        <h1>Temperature Converter</h1>
        <input type="text" name="temperature" placeholder="Enter temperature" required></br>
        <select name="operation">
            <option value="0">Select</option>
            <option value="fah"> Fahrenheit </option>
            <option value="cel">Celsius</option>

        </select></br>
        <button type="submit">Convert</button>


    </form>
    <div id=result>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = ($_POST["temperature"]);
            $operation = $_POST["operation"];
            $result = 0 ;
            switch ($operation) {
                case "fah":
                    $result = ($temperature * 9 / 5) + 32;
                    echo "Result :$result";
                    break;
                case "cel":
                    $result = ($temperature - 32) * 5 / 9;
                    echo "Result :$result";
                    break;
                default:
                    echo " Wrong Input ";
                    break;


            }
        }
        ?>

    </div>
</div>