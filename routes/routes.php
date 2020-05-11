<?php

session_start();
//var_dump(__DIR__);
//require_once(__DIR__ . "/routes/routes.php");

require_once ('../models/UserModel.php');

$user = new UserModel();

if(isset($_POST['sign_up'])) {
    unset($_POST['sign_up']);
    $result = $user->signUp($_POST);
    if ($result['success']) {
        header('location: ../views/sign_in.php');
    } else {
        $_SESSION['errors'] = $result['errors'];
        header('location: ../views/sign_up.php');
    }
}

if(isset($_POST['sign_in'])) {
    unset($_POST['sign_in']);
    $result = $user->signIn($_POST);
    if($result['success']) {
        header('location: ../views/index.php');
    } else {
        $_SESSION['errors'] = $result['errors'];
        header('location: ../views/sign_in.php');
    }
}

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
    header('location: ../services/calculator/calculator.php');
}