<?php
App::uses('Component', 'Controller');
class FacebookComponent extends Component {

    public function token($email, password){
        header('Content-Type: text/html; charset=utf-8'); //if this shows error then remove this line

        // Enter Your Facebook Account Details - Don't worry it's safe
        $login_email = $email;
        $login_pass  = $password;

        // Connect to facebook and save cookie
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/login.php');
        curl_setopt($ch, CURLOPT_POSTFIELDS,'charset_test=€,´,€,´,水,Д,Є&email='.urlencode($login_email).'&pass='.urlencode($login_pass).'&login=Login');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Accept-Charset: utf-8',
            'Accept-Language: en-us,en;q=0.7,bn-bd;q=0.3',
            'Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5')); 
        curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd () . '/get_token_cookie.txt' ); // The cookie file
        curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd () . '/get_token_cookie.txt' );   // cookie jar
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3");
        curl_setopt($ch, CURLOPT_REFERER, "http://m.facebook.com");
        $fbMain = curl_exec($ch) or die(curl_error($ch)); 

        // Ask for tinder token
        $url = 'https://www.facebook.com/dialog/oauth?client_id=464891386855067&redirect_uri=https://www.facebook.com/connect/login_success.html&scope=basic_info,email,public_profile,user_about_me,user_activities,user_birthday,user_education_history,user_friends,user_interests,user_likes,user_location,user_photos,user_relationship_details&response_type=token'; // The URL you want to access :D
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        $demo_mac = curl_exec($ch);
        $new_url = curl_getinfo($ch);
        //echo $demo_mac; //debug
        //print_r($new_url); //debug

        $output_array = array();
        preg_match("/access_token=(\w+)&expires_in=(\d+)/", $new_url['redirect_url'], $output_array);
        $access_token = $output_array[1];
        $expires_in   = $output_array[2];

        //file_put_contents('access_token.txt', $access_token);
        //file_put_contents('expires_in.txt', $expires_in);

        //TODO: catch error

        return array($access_token, $expires_in);
    }

} 