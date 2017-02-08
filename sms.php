<?php
	// Textlocal account details
	$username = 'sree.cse1402@gmail.com';
	$hash = 'SREE.textlocal@123';
	
	// Message details
	$numbers = array(919551723141);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('Message Received....');
 
        $numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('http://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>