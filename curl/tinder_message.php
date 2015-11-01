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

$match_id = '5408951d45e6ce92720a819655e9a446aa1f0e481d22f12f';

$args = array(
    'message' => 'Cyrielle, il faut qu\'on parle...'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.gotinder.com/user/matches/'.$match_id);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($args));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch) or die(curl_error($ch)); 

$rslt_array = json_decode($result);

print_r($rslt_array);