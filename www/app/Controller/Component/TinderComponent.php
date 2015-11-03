<?php
App::uses('Component', 'Controller');
class TinderComponent extends Component {

    private $api_url = 'https://api.gotinder.com/';

    private $headers = array(
        "User-Agent: Tinder/4.6.1 (iPhone; iOS 9.0.1; Scale/2.00)",
        "Content-type: application/json; charset=utf-8",
        "platform: ios",
        "app-version: 371",
        "os_version: 90000000001"
    );

    private function _add_token($tinder_token) {
        $this->headers[] = "X-Auth-Token: ".$tinder_token;
    }

    private function _get($tinder_token=null, $service) {
        if $tinder_token !== null {
            $this->_add_token($tinder_token);
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . $service);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $rslt = curl_exec($ch) or die(curl_error($ch));
        $rslt_obj = json_decode($rslt); 
        return $rslt_obj;
    }

    private function _post($tinder_token=null, $service, $query) {
        if $tinder_token !== null {
            $this->_add_token($tinder_token);
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . $service);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $rslt = curl_exec($ch) or die(curl_error($ch));
        $rslt_obj = json_decode($rslt);
        return $rslt_obj; 
    }

    public function auth($fb_id, $fb_token) {
        $query = array(
            "facebook_token" => urlencode($fb_token),
            "facebook_id" => urlencode($fb_id)
        );
        $rslt = $this->_post(null, 'auth', $query);
        return $rslt->token;
    }

    public function like($tinder_token, $user_id) {
        return $this->_get($tinder_token, 'like/'.$user_id);
    }

    public function superlike($tinder_token, $user_id) {
        return $this->_get($tinder_token, 'like/'.$user_id.'/super');
    }

    public function pass($tinder_token, $user_id) {
        return $this->_get($tinder_token, 'pass/'.$user_id);
    }

    public function message($tinder_token, $match_id, $message) {
        $query = array(
            'message' => $message
        );
        return $this->_post($tinder_token, 'user/matches/'.$match_id, $query);
    }

    public function recs($tinder_token) {
        return $this->_get($tinder_token, 'recs');
    }

    // last_activity_date : "2015-10-30T09:32:41.154Z"
    public function updates($tinder_token, $last_activity_date) {
        $query = array(
            'last_activity_date' => $last_activity_date
        );
        return $this->_post($tinder_token, 'updates', $query);
    }

    public function profile($tinder_token) {
        return $this->_get($tinder_token, 'profile');
    }

    public function user($tinder_token, $user_id) {
        return $this->_get($tinder_token, 'user/'.$user_id);
    }

}