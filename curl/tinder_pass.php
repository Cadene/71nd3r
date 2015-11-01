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

$user_id = '55f7516c32f5f6f92ff121bc';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.gotinder.com/pass/'.$user_id);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch) or die(curl_error($ch)); 

$rslt_array = json_decode($result);
print_r($rslt_array);