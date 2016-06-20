<?php

/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 28/04/16
 * Time: 15:00
 */
class OC_User_DJANGO extends \OCA\user_external\Base{
    private $host;

    public function __construct($host) {
        parent::__construct($host);
        $this->host=$host;
    }

    public function checkPassword($uid, $password){

        $url = 'http://localhost:8000/json/login';
        $data = "username=" . $uid . "&password=" . $password;

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        if($response == "LOGIN_OK"){
            $this->storeUser($uid);
            return $uid;
        }
        else{
            return false;
        }
    }

}