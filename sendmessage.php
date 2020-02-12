<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

function sendMessage($phoneNumber, $message){
	// Set your app credentials
	$username   = "sandbox";
	$apiKey     = "b50676e0cc4560b89ddc06c52d7375f1d59b3c2e52cd94f48f012af75b082a01";

	// Initialize the SDK
	$AT         = new AfricasTalking($username, $apiKey);

	// Get the SMS service
	$sms        = $AT->sms();

	// Set the numbers you want to send to in international format
	//$recipients = "+254720068917";

	// Set your message
	//$message    = "I'm a lumberjack and its ok, I sleep all night and I work all day";

	// Set your shortCode or senderId
	//$from       = "myShortCode or mySenderId";

	try {
	    // Thats it, hit send and we'll take care of the rest
	    $result = $sms->send([
	        'to'      => $phoneNumber,
	        'message' => $message
	    ]);

	    //print_r($result);
	    echo("Message sent successfully");
	    
	} catch (Exception $e) {
	    echo "Error: ".$e->getMessage();
	}

}

