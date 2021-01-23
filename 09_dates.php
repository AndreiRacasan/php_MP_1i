<?php

// Print current date
echo date('Y-m-d H:i:s');

// Print yesterday
echo date('Y-m-d H:i:s', time() - 86400);

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s');

// Print current timestamp
echo time();

// Parse date: https://www.php.net/manual/en/function.date-parse.php
date_parse('2021-01-23 11:45');
