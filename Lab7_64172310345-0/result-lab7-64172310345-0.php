<?php
$chacksort = $_GET['chack'];
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$operator = $_GET['operator'];

setcookie("number1", "$number1");
setcookie("number2", "$number2");
setcookie("operator", "$operator");

$result = calculator($number1, $number2, $operator);

if ($_GET['chack'] == "Nonsort") {
    header("location: result.php");
}

function calculator($number1, $number2, $operator)
{
    switch ($operator) {
        case '+':
            $value = $number1 + $number2;
            break;
        case '-':
            $value = $number1 - $number2;
            break;
        case '*':
            $value = $number1 * $number2;
            break;
        case '/':
            $value = $number1 / $number2;
            break;
    }
    return $value;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<style>
    body {
        margin-top: 4cm;
    }

    .resulttext {
        text-align: center;
    }

    .showresult {
        text-align: center;
        background-color: palevioletred;
        width: 50%;
        margin-left: 25%;
        margin-right: 30%;
        border: 1px solid;
        font-size: 20px;
    }

    input {
        background-color: palevioletred;
    }

    .showsorttext {
        text-align: center;
    }

    .sortnumber {
        text-align: center;
        background-color: lightblue;
        width: 50%;
        margin-left: 25%;
        margin-right: 30%;
        border: 1px solid;
        font-size: 20px;
    }

    .bt {
        text-align: center;
    }
</style>

<body>
    <div class="resulttext">
        <h2>ผลลัพธ์ :</h2>
    </div>

    <div class="showresult">
        <p style="margin: 1px 0px 1px 0px;"><?= $number1 ?> <?= $operator ?> <?= $number2 ?> = <?= $result ?></p>
    </div>
    <br>
    <br>
    <div class="showsorttext">
        <h2>แสดงเรียงตัวเลข:</h2>
    </div>
    <br>
    <br>
    <div class="sortnumber">
        <?php if ($number1 > $number2) { ?>
            <?php for ($number1 = $number1; $number1 >= $number2; $number1--) {
                $number1 = sprintf("%02d",$number1);
                    if($number1 < 0){
                        $number1 = sprintf("%03d",$number1);
                        echo "$number1"." ";
                    }else{
                        $number1 = sprintf("%02d",$number1);
                        echo "$number1"." ";
                    }
            } ?>
        <?php } elseif ($number1 < $number2) {
                for ($number1 = $number1; $number1 <= $number2; $number1++) {
                $number1 = sprintf("%02d",$number1);
                    if($number1 < 0){
                    $number1 = sprintf("%03d",$number1);
                    echo "$number1"." ";
                    }else{
                    $number1 = sprintf("%02d",$number1);
                    echo "$number1"." ";
                    }
            } ?>
        <?php } else {
            $number1 = sprintf("%02d",$number1);
            echo "$number1 "." ";
        } ?>
    </div>
    <br>
    <br>
    <div class="bt">
        <form action="calculate-lab7-64172310345-0.html">
            <button type="submit">ย้อนกลับ</button>
        </form>
    </div>
</body>

</html>