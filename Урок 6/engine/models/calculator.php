<?php

function countNums (int $a, int $b, string $operation) {
    switch ($operation) {
        case "addition":
            return $a + $b;
        case "subtraction":
            return $a - $b;
        case "multiplication":
            return $a * $b;
        case "division":
            return $b == 0 ? "i can't do this, change 0 to something else" : $a / $b;
    }
}

function getResult () {
    $num1 = (int)$_POST["num1"];
    $num2 = (int)$_POST["num2"];
    $operation = (string)$_POST["operation"];

    if ($num1 != "" && $num2 != "") {
        $result = countNums($num1, $num2, $operation);
        return $result;
    }
}

function getOperation () {
    return (string)$_POST['operation'];
}

function getValues() {
    return [
        'num1' => (int)$_POST['num1'],
        'num2' => (int)$_POST['num2'],
        'result' => getResult()
    ];
}