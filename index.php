<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<H1> This is a sample Calcultaor</H1>
    <form action ="index.php" method = "post">
        <input name = "NumberOne" value = ""><br>
        <input name = "NumberTwo" value = ""><br>

        <input type = "submit" name = "AllOperator" value = "+">
     <input type = "submit" name = "AllOperator" value = "-">
        <input type = "submit" name = "AllOperator" value = "x">
     <input type = "submit" name = "AllOperator" value = "÷">
        <br> 
    </form>

</body>
</html>

<?php 
    if (isset ($_POST["AllOperator"])) {
    $numOne = $_POST ["NumberOne"];
    $numTwo = $_POST ["NumberTwo"];
    $operator = $_POST ["AllOperator"];
    $result = '';
    
    if ($operator == "+"){
        $result = $numOne + $numTwo;
        echo $result;
    }
    else if ($operator == "-")
    {
        $result = $numOne - $numTwo;
        echo $result;
    }
    else if ($operator == "x") {
        $result = $numOne * $numTwo;
        echo $result;
    }
    else if ($operator == "÷" ){
        $result = $numOne / $numTwo;
        echo $result;
    }
    if ($numOne == 0) {
        echo "Please Input Value Number one";
    }
    else if ($numTwo == 0) {
        echo "Please Input Value Number Two";
    }
    }
?>