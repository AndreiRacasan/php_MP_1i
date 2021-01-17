<?php

// Declaring numbers
$a = 5;
$b = 3;
$c = 1.5;

// Arithmetic operations
echo $a + $b - $c * $a * $b;

// Assignment with math operators
$a += $b;
echo $a;

// Increment operator
echo $a++;
echo ++$a;

// Decrement operator
echo $b--;
echo --$b;

// Number checking functions
is_float(1.54);
is_double(1.28);
is_integer(15);
is_numeric("6.23");
is_numeric("6a.23");

// Conversion
$number = '15.23';
$newNum = (float)$number;
var_dump($newNum);

// Number functions
// abs, pow, sqrt, round, floor, ceil etc...

// Formatting numbers
$number = 325325.423423;
echo number_format($number, 2, ',', '.');

// https://www.php.net/manual/en/ref.math.php
