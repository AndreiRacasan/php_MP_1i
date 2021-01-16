<?php

// Variable types and declarations
$varName = 'X';
$number = 22;
$isThere = true;
$float = 1.25;
$nonexistent = null;

// Print the variables. Explain what is concatenation
echo $varName;
echo '<br>';
echo $isThere;
echo '<br>';

// Print types of the variables
echo gettype($varName);
echo '<br>';

// Print the whole variable
var_dump($varName, $number);
echo '<br>';

// Change the value of the variable
$varName = false;

// Print type of the variable
echo gettype($varName);
echo '<br>';

// Variable checking functions
is_string($number);

// Check if variable is defined
isset($number);

// Constants
define('PI', 3.14);
echo PI;
echo '<br>';

// Using PHP built-in constants
echo SORT_ASC;
echo '<br>';
echo PHP_INT_MAX;
