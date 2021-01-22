<?php

// Function which prints "Hi"
function hi()
{
  echo "hi";
}

hi();

// Function with argument
function hi2($arg)
{
  echo "hi $arg";
}

hi2('test');

// Create sum of two functions
function sum($n, $m)
{
  return $n + $m;
}

echo sum(1, 2);

// Create function to sum all numbers using ...$nums
function sum2(...$args)
{
  $s = 0;

  foreach ($args as $n) {
    $s += $n;
  }

  return $s;
}

echo sum2(1, 2, 3, 4, 5);

// Arrow functions
function sum3(...$args)
{
  return array_reduce($args, fn ($sum, $num) => $sum + $num);
}

echo sum2(1, 2, 3, 4, 5);
