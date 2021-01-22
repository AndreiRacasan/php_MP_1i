<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
  echo '20';
}

// Without circle braces
if ($age === 20) echo '20';

// Sample if-else
if ($age > 20) {
  echo '1';
} else {
  echo '2';
}

// Difference between == and ===
if ($age == 20) {
  echo '1';
}

if ($age === '20') {
  echo '2';
}

// if AND
if ($age === 20 && $salary > 1000) {
  echo 'print';
}

// if OR
if ($age === 20 || $salary > 1000) {
  echo 'print';
}

// Ternary if
echo $age < 22 ? 'Y' : 'N';

// Short ternary
$newAge = $age ?: '18';

// Null coalescing operator
$newName = isset($name) ? $name : 'X';
$newName ?? 'X';
