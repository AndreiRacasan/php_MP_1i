<?php

// Create simple string
$object = 'array';
$string = 'Hello Hello' . $object . 'Hi';
$string = "Hello Hello $object Hi";
$sstring = 'Hi Hi';
echo $string;

// String concatenation
echo 'a' . 'b' . 'b';

// String functions
//strlen, trim, l/rtrim, wordcount, strrev,toupperlower etc...

// Multiline text and line breaks
$textTest = "
A
B
C
D
E
";

echo $textTest;
echo nl2br($textTest);

// Multiline text and reserve html tags

$textTestTags = "
A
B
<b>C</b>
D
E
";

echo nl2br($textTestTags);
echo htmlentities($textTestTags);
echo nl2br(htmlentities($textTestTags));
// html entity decode


// https://www.php.net/manual/en/ref.strings.php