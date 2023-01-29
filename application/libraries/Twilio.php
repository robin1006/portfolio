<?php
/**
 * This is a "dummy" library that just loads the actual library in the construct.
 * This technique prevents issues from CodeIgniter 3 when loading libraries that use PHP namespaces.
 * This file can be used with any PHP library that uses namespaces.  Just copy it, change the name of the class to match your library
 * and configs and go to town.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

use Twilio\Rest\Client; // twilio SMS

class Twilio {

	private $account_sid;
	private $auth_token;
	private $twilio_from_number;
	private $client;
    private $service_id;

    public function __construct()
    {
    	$this->account_sid = TWILIO_AC_ID;
        $this->auth_token = TWILIO_AUTH_TOKEN;
        $this->twilio_from_number = TWILIO_FROM_NUMBER;
        $this->service_id = TWILIO_SERVICE_ID;
        $this->Client = new Client($this->account_sid, $this->auth_token);        
    }

    public function sendSmsToUser($postVal) {
        $sent = '';
        try {
            $response = $this->Client->messages->create(
                                $postVal['receiver_number'],
                                [
                                    'from' => $this->twilio_from_number,
                                    'body' => $postVal['message']
                                ]
                            );
            $sent = 1;
        } catch (exception $e) {
            $sent = $e->getMessage();
        }
        if($sent==1) {
            $aReturn = ['sid'=>$response->sid, 'is_sent'=>true];
        } else {
            $aReturn = ['sid'=>'', 'is_sent'=>false];
        }
        return $aReturn;
    }


    function sendSmsToUser1($postVal) {
        $url = 'https://api.twilio.com/2010-04-01/Accounts/' . $this->account_sid . '/Messages.json';
        $enc_string = 'To='.rawurlencode($postVal['receiver_number']).
                            '&MessagingServiceSid='.$this->service_id.
                            // '&From='.rawurlencode($this->twilio_from_number).
                            '&Body='.rawurlencode($postVal['message']);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

        curl_setopt($ch, CURLOPT_HTTPAUTH,CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD,$this->account_sid . ':' . $this->auth_token);

        curl_setopt($ch, CURLOPT_POST,true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $enc_string);            

        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response,true);
    }
}