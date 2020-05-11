<?php

if(isset($_POST['calc'])) {
    $firstNumber = $_POST['first_number'];
    $secondNumber = $_POST['second_number'];
    $mathExpresion = $_POST['math_expresion'];

    if(!empty($firstNumber) || !empty($secondNumber)) {
        if($mathExpresion === '+'){
            $result =  $firstNumber + $secondNumber;
        } elseif ($mathExpresion === '-') {
            $result = $firstNumber - $secondNumber;
        } elseif ($mathExpresion === '*'){
            $result =  $firstNumber * $secondNumber;
        } elseif ($mathExpresion === '/') {
            $result = $firstNumber / $secondNumber;
        } else {
            $result = 'Error';
        }
    }
}


?>
