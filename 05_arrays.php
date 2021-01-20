<?php

// Create array
$array = ['A', 'B', 'C'];

// Print the whole array
echo '<pre>';
var_dump($array);
echo '</pre>';

// Get element by index
echo $array[1];

// Set element by index
$array[0] = 'X';

// Check if array has element at index 2
isset($array[2]);

// Append element
$array[] = 'Y';

// Print the length of the array
echo count($array);

// Add element at the end of the array
array_push($array, 'Q');

// Remove element from the end of the array
array_pop($array);

// Add element at the beginning of the array
array_unshift($array, 'N');

// Remove element from the beginning of the array
array_shift($array);

// Split the string into an array
$string = 'A, B, C';
explode(",", $string);

// Combine array elements into string
echo implode("&", $array);

// Check if element exist in the array
in_array('A', $array);

// Search element index in the array
array_search('M', $array);

// Merge two arrays
$newArr = ['x', 'y'];
array_merge($array, $newArr);

// Sorting of array (Reverse order also)
sort($array);
rsort($array);


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys

// Two dimensional arrays