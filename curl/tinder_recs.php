<?php

$tinder_token = file_get_contents('tinder_token.txt');

$headers = array(
    "X-Auth-Token: ".$tinder_token,
    "User-Agent: Tinder/4.6.1 (iPhone; iOS 9.0.1; Scale/2.00)",
    "Content-type: application/json; charset=utf-8",
    "platform: ios",
    "app-version: 371",
    "os_version: 90000000001"
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.gotinder.com/recs');
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch) or die(curl_error($ch)); 

$rslt_array = json_decode($result);
file_put_contents('recs.txt', $rslt_array);
print_r($rslt_array);