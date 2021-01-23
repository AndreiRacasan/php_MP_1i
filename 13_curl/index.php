<?php

$url = 'https://jsonplaceholder.typicode.com/users';

// Sample example to get data
$res = curl_init($url);
curl_setopt($res, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($res);
$resCode = curl_getinfo($res, CURLINFO_HTTP_CODE);
curl_close($res);
echo $result;

// Get response status code

// set_opt_array

// Post request
// $resource = curl_init();
// curl_setopt_array($resource, [
//   CURLOPT_URL => $url,
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_POST => true,
//   CURLOPT_POSTFIELDS => json_encode();
// ])

// $result = curl_exec($resource);
// curl_close($resurce);
// echo $result;