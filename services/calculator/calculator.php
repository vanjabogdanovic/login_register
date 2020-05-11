<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Project</title>
</head>

<?php

require_once ('calc.php');

?>

<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10 offset-sm-1 text-center">
            <h1 class="display-4 text-secondary mb-4">Calculator</h1>
            <div class="info-form">
                <form action="" method="POST" class="form-inline justify-content-center" name="calc">

                    <input name="input_text" class="form-control col-sm-3 mb-2" id="text" onkeyup="allowedText(this);" >
                    <div class="form-control text-secondary text-left col-sm-2 mb-2 ml-1">
                        <?php
                        echo '= result';
                        ?>
                    </div>
                    <input type="submit" name="calculate" class="btn btn-outline-success col-sm-2 mb-2 ml-1" value="CALCULATE">
                    <div class="col-sm-10 ">
                        <div class="text-center select_button">
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('7')">7</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('8')">8</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('9')">9</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('/')">/</a>
                        </div>

                        <div class="text-center select_button">
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('4')">4</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('5')">5</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('6')">6</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('*')">x</a>
                        </div>
                        <div class="text-center select_button ">
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('1')">1</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('2')">2</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('3')">3</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('-')">-</a>
                        </div>
                        <div class="text-center select_button">
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('0')">0</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('.')">.</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('9')">9</a>
                            <a name="" class="btn btn-outline-primary col-sm-2 mb-1"  href="javascript:addText('+')">+</a>

                        </div>
                        <div class="text-center select_button">
                            <a name="" class="btn btn-outline-primary col-sm-1 mb-1"  href="javascript:addText('(')">(</a>
                            <a name="" class="btn btn-outline-primary col-sm-1 mb-1"  href="javascript:addText(')')">)</a>
                            <a name="" class="btn btn-outline-secondary col-sm-3 mb-1"  href="javascript:remove()">DELETE</a>
                            <a name="" class="btn btn-outline-danger col-sm-3 mb-1"  href="javascript:clear()">CLEAR</a>

                        </div>
                        <hr>
                    </div>
                </form>
            </div>
            <br>
        </div>
        <div class="col-sm-10 offset-sm-1 text-center">
            <h1 class="display-4 text-secondary mb-4">PHP Calculator</h1>
            <div class="info-form">
                <form action="../../routes/routes.php" method="POST" class="form-inline justify-content-center" name="calc">
                    <input type="number" name="first_number" placeholder="First number" class="form-control border-primary col-sm-2 m-1" step="any">
                    <select name="math_expresion" class="form-control border-primary col-sm-1 m-1">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <input type="number" name="second_number" placeholder="Second number" class="form-control border-primary col-sm-2 m-1" step="any">
                    <div class="form-control border-primary text-secondary bg-white col-sm-2 m-1">
                        <?php
                        if(isset($result)) {
                            echo $result;
                        } else {
                            echo '= (result)';
                        }
                        ?>
                    </div>
                    <input type="submit" name="calc" value="Calculate" class="form-control btn-outline-success col-sm-2 m-1">
            </div>
        </div>
    </div>
</div>

<script src="calc.js" defer></script>

</body>
</html>