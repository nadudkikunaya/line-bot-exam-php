<?php


$access_token = 'eG5uMEcpji9Vf35nUyNVc7kJ1tQHusQZsbs51UOy0NQEISeTz5FcrKApcnRJZo5VKvGgyXvCZlZ+dFXLZFqoN/8Z3DUKD56fA9lqh/f04Ggm5fUkXvFHGsaU4OU3V72EjECg5YOyk12YDM1ZeUqJXgdB04t89/1O/w1cDnyilFU=';

$userId = 'U53541e7f9c4bc8fbb28f8254b2e4301d';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

