<?php
// curl -X POST https://api.gotinder.com/auth --data '{"facebook_token": "CAAGm0PX4ZCpsBANgHxeP5XB7IlSBhfNUuhxGJL9Wn9tYxUfAZBoZBilwWKOZAGM52wMF6dbfSlCzeZAZBYFjaZCZADXRa2pzhYGkKcZB9mboYLWofh6bAO4RIZCy7CNfLmSHbSfcKy035Yk6k5MxFpkUBnBXIcZASIlj1gZAVfXvdj7eBIb1PQvewAB7VUmwvER3oY5H8ZCI0S3vV8gZDZD", "facebook_id": "10152178465738089"}' -H "content-type: application/json" -H "platform: ios" -H "user-agent: Tinder/4.6.1 (iPhone; iOS 9.0.1; Scale/2.00)" -H "app-version: 123" 

$access_token = file_get_contents('access_token.txt');
$expires_in   = file_get_contents('expires_in.txt');

$facebook_id = '10152178465738089'; //http://findmyfbid.com/

$query = array(
    "facebook_token" => urlencode($access_token),
    "facebook_id" => urlencode($facebook_id)
);

$headers = array(
    "User-Agent: Tinder/4.6.1 (iPhone; iOS 9.0.1; Scale/2.00)",
    "Content-type: application/json; charset=utf-8",
    "platform: ios",
    "app-version: 371",
    "os_version: 90000000001"
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.gotinder.com/auth');
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch) or die(curl_error($ch)); 

$rslt_array = json_decode($result);
$tinder_token = $rslt_array->token;
file_put_contents('tinder_token.txt', $tinder_token);
?>


