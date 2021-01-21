<?php
$a = 1;
$b = 2;

$a += $b;
$b = $a - $b;
$a -= $b;

echo "a = " . $a;
echo "<br>";
echo "b = " . $b;