<form method="post">
<label>Enter a decimal number:</label>
<input type="text" name="decimalNumber">
</form>

<?php 
define("TWO", 2);
//define("EIGHT", 8);

if (!empty($_POST)) {

    $decimalNumber = $_POST["decimalNumber"];

    echo "Number " . $decimalNumber . " to binary is: " . (decimalToBinary($decimalNumber)) . "<br>";

    //echo "Number " . $decimalNumber . " to octal is: " . (decimalToOctal($decimalNumber));
    
}


function decimalToBinary ($decimalNumber) {

    $numberToDivide = $decimalNumber;

    $arrayResult = array();

    while ($numberToDivide > 1){
        $divisionResult = intdiv($numberToDivide, TWO);
        $remaining = $numberToDivide % TWO;
        array_push($arrayResult, $remaining);
        $numberToDivide = $divisionResult;
    }

    if ($numberToDivide == 1) {
        array_push($arrayResult, $numberToDivide);
    }

    $arrayReverse = array_reverse ($arrayResult);

    $binaryNumber = implode ($arrayReverse);


    return $binaryNumber;
}
/*
function decimalToOctal ($decimalNumber) {

    $numberToDivide = $decimalNumber;

    $arrayResult = array();

    while ($numberToDivide > 1){
        $divisionResult = intdiv($numberToDivide, EIGHT);
        $remaining = $numberToDivide % EIGHT;
        array_push($arrayResult, $remaining);
        $numberToDivide = $divisionResult;
    }

    if ($numberToDivide == 1) {
        array_push($arrayResult, $numberToDivide);
    }

    $arrayReverse = array_reverse ($arrayResult);

    $binaryNumber = implode ($arrayReverse);


    return $binaryNumber;
}
*/
?>