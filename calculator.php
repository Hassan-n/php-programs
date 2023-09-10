<!-- simple PHP calculator allows you to perform basic arithmetic operations such as addition, subtraction, multiplication, and division. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <?php
        $num1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
        $num2 = isset($_GET['num2']) ? $_GET['num2'] : 0;
        $operator = isset($_GET["operator"]) ? $_GET["operator"] : '';
        $answer = 0;

        if (!empty($operator)) {
            switch ($operator) {
                case "Add":
                    $answer = $num1 + $num2;
                    break;
                case "Subtract":
                    $answer = $num1 - $num2;
                    break;
                case "Multiply":
                    $answer = $num1 * $num2;
                    break;
                case "Divide":
                    if ($num2 != 0) {
                        $answer = $num1 / $num2;
                    } else {
                        $answer = "Cannot divide by zero";
                    }
                    break;
            }
        }
    ?>

    <form action="#" method="get">
        <input type="text" name="num1" value="<?php echo $num1; ?>">First Number
        <br>
        <input type="text" name="num2" value="<?php echo $num2; ?>">Second Number
        <br>
        <input type="text" name="answer" readonly="readonly" value="<?php echo $answer; ?>">Result
        <br>

        <input type="submit" name="operator" value="Add">
        <input type="submit" name="operator" value="Subtract">
        <input type="submit" name="operator" value="Multiply">
        <input type="submit" name="operator" value="Divide">
    </form>   
</body>
</html>
