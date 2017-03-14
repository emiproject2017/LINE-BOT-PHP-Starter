<?php
$access_token = 'kXAG0Ax0HlZcqbHILxPGrgIUzRLrXsfLn4CtW7W1x0XL+Ybr59RrDRAmDMXA01gSHuaFyka9gBT+mKuvxIEC0vWJ5b/Z//e8qvThTFNY6AP8cIATyzNBrLWvWLxcVuthxqOrGzaH/UE1IhmW2K04DwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
