<?php


$access_token = '0nNu0xRS7KEl5GJzWa73QXr5mzQQbyoIbM4MFcmhnUbFnPwr5Tm+HDQDmn8C8Qe0fxDQ46qzQes5LShvG4MrYJFoYCAJ+BF0RwplirGCzCpSh1S2A/TjSx4yzIGCSFB1s0/Lfi3V3fiz+ySwKeQqKQdB04t89/1O/w1cDnyilFU=
';

$userId = 'Ub61eee74f14a06d62b99342d790855b6';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

