<?php



require "vendor/autoload.php";

$access_token = '0nNu0xRS7KEl5GJzWa73QXr5mzQQbyoIbM4MFcmhnUbFnPwr5Tm+HDQDmn8C8Qe0fxDQ46qzQes5LShvG4MrYJFoYCAJ+BF0RwplirGCzCpSh1S2A/TjSx4yzIGCSFB1s0/Lfi3V3fiz+ySwKeQqKQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f44115334f1356dcdd3c18d451c9c3f0';

$pushID = 'Ub61eee74f14a06d62b99342d790855b6';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







