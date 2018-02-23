<?php
$access_token = 'uP3lNIyP8hw/nHfB/uRiVn5DTN9q25yTIer4dIRkbicL+9z62kw8E7xxzDRR1d78XxerqJx3otWj0OqohFtMLiwSJy6fEEYarDN9KVKol7CxzXvrdbS13RD+oKsZ9fEGKCADqMw9LygEBkYbp3XyTwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
