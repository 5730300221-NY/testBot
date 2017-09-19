<?php
$access_token = 'LYcgZ4nOeNRBAbms4iLtVg2Zr5+InPb88Vo0L7bwztA5NIZeYaUHNCGu+q/TH4wTy02oh+DQoOvIbnps5WtxC57zWtZgs37QoXI0aCoz+yynvkXOdock9qWh5TL6V85be6U/plP/ubg6zrDI7nZYKAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
