<?php
    
    $number1 = $_COOKIE["number1"];
    $number2 = $_COOKIE["number2"];
    $operator = $_COOKIE["operator"];

    $result = calculator($number1, $number2, $operator);

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
    body{
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

    .showsorttext {
        text-align: center;
    }
    .bt{
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
        <h2>ไม่แสดงเรียงตัวเลข</h2>
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