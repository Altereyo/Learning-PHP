<?php 
// Задание 1 __________________________________________________________________________
$a = rand(-10, 10);
$b = rand(-10, 10);

if ($a >= 0 && $b >= 0) {
    echo "Оба положительные";
}
elseif ($a < 0 && $b < 0) {
    echo "Оба отрицательные";
}
else {
    echo "Числа разных знаков";
}

echo "a - " . $a . "\n";
echo "b - " . $b . "\n";

// Задание 2 __________________________________________________________________________
function foo($int) {
    echo $int . "\n";
    switch ($int) {
        case 15:
            break;
        default:
            foo(++$int);
    }
}

$a = rand(0, 15);

foo($a);

// Задание 3 __________________________________________________________________________

// мой вариант с одной функцией
function countNums ($a, $b, $action) {
    switch ($action) {
        case "addition":
            return $a + $b;
        case "subtraction":
            return $a - $b;
        case "multiplication":
            return $a * $b;
        case "division":
            return $b == 0 ? "i can't do this, change 0 to something else" : $a / $b;
        default:
            echo "action error";
    }
}

echo countNums(13,7,'addition') . "\n";
echo countNums(24,4,'subtraction') . "\n";
echo countNums(5,4,'multiplication') . "\n";
echo countNums(40,2,'division') . "\n";
echo countNums(16,0,'division') . "\n";


// вариант по заданию
function addition ($a, $b) {
    return $a + $b;
}

function subtraction ($a, $b) {
    return $a - $b;
}

function multiplication ($a, $b) {
    return $a * $b;
}

function division ($a, $b) {
    return $b == 0 ? "i can't do this, change 0 to something else" : $a / $b;
}


// Задание 4 __________________________________________________________________________
function countNums2 ($a, $b, $action) {
    return $action($a, $b);
}

// Задание 7 __________________________________________________________________________
function pickWord(int $time, $timeType) {
    $lastChar = substr($time, -1);
    $notChangeable = [11, 12, 13, 14];
    
    // проверяем есть ли в массиве с неизменными (11-14) числами наше время
    if (in_array($time, $notChangeable)) {
        return $timeType == 'h' ? ' часов ' : ' минут';
    }
    
    // если нет - проверяем последнее число, является ли оно единицей
    elseif ($lastChar == 1) {
        return $timeType == 'h' ? ' час ' : ' минута';
    }
    
    // нет - проверяем является ли оно числом от 2 до 4 включительно 
    elseif ($lastChar >= 2 && $lastChar <= 4) {
        return $timeType == 'h' ? ' часа ' : ' минуты';
    }
    
    // в любом другом случае возвращаем дефолтное слово
    else {
        return $timeType == 'h' ? ' часов ' : ' минут';
    }
}

function getTime ($time) {
    $array = explode(":", $time);
    $hours = $array[0];
    $minutes = $array[1];
    // можно было бы вместо $hours сразу создать $string, но так выглядит намного лаконичнее
    $string = $hours . pickWord($hours, 'h') . $minutes . pickWord($minutes, 'm');
    return $string;
}

// date_default_timezone_set('America/Los_Angeles');
// ini_set('date.timezone', 'America/Los_Angeles'); 
// пытался использовать эти функции, чтобы выводить время конкретного города, но они почему-то не работают

$time = date('G:i');
// $time = "8:41"; // используйте данную строку для проверки, закомментировав строку выше

echo 'Сейчас ' . getTime($time);