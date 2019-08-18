<?php



require "vendor/autoload.php";

$access_token = 'eG5uMEcpji9Vf35nUyNVc7kJ1tQHusQZsbs51UOy0NQEISeTz5FcrKApcnRJZo5VKvGgyXvCZlZ+dFXLZFqoN/8Z3DUKD56fA9lqh/f04Ggm5fUkXvFHGsaU4OU3V72EjECg5YOyk12YDM1ZeUqJXgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '040cde77454f42892863491a16f6da98';

$id = $arrayJson['events'][0]['source']['userId'];
$pushID = '$id';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

