<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even_odd_checker</title>
</head>
<body>
    <form action="" method ="post">
        <h2>Even or Odd checker</h2>
        <input type="text" name="number" placeholder="Enter the number" required>
        <button type="submit">Check</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $number =$_POST["number"]; 
        $result=($number % 2 == 0) ? "Even Number":"Odd Number";
        echo "This is an {$result}";
      }
    ?>
</body>
</html>