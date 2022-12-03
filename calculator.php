<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = ' ';

if(is_numeric($first_num) && is_numeric($second_num)){
    switch($operator){
        case "Add":
        $result = $first_num + $second_num;
        break;
        case "Substract":
        $result = $first_num - $second_num;
        break;
        case "Multiply":
        $result = $first_num * $second_num;
        break;
        case "Divide":
        $result = $first_num / $second_num;

    }
}

?>

</head>
<body>
    <form action="calculator.php" method="post">
        <p>First Number</p>
        <input type="number" id="first_num" name="first_num" required="required" value="<?php echo $first_num;?> "> 
        <p>Second Number</p>
        <input type="number" id="second_num" name="second_num" required="required" value="<?php echo $second_num;?> ">
        <p>Result</p>
        <input reandoly="readonly" name="result" id="result" value="<?php echo $result;?> ">
        <br><br>
        <input type="submit" name="operator" value="Add">
        <input type="submit" name="operator" value="Substract">
        <input type="submit" name="operator" value="Multiply">
        <input type="submit" name="operator" value="Divide">

    </form>
</body>
</html>
