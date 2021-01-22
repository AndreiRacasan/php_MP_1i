<?php

// while
while (false) {
  echo "don't replace false with true";
}

// Loop with $counter
$c = 1;

while ($c <= 10) {
  echo $c;
  $c++;
}

// do - while
do {
  echo $c;
  $c++;
} while ($c <= 20);

// for
for ($i = 1; $i <= 10; $i++) {
  echo $i;
}

// foreach
$x = ['a', 'b', 'c'];

foreach ($x as $m => $print) {
  echo $print;
}
