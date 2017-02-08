<<<<<<< HEAD
<?php
// Get the PHP helper library from twilio.com/docs/php/install
require('Twilio.php'); // Loads the library

$account_sid = 'AC6683bb244ea21ef85462d2a4bc569351'; 
$auth_token = 'cd8db88120d86e2896a0364379030ce7'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$client->account->messages->create(array( 
	'To' => "+919843247769", 
	'From' => "+17134897679", 
	'Body' => "Hi now messenger is working",   
=======
<?php
// Get the PHP helper library from twilio.com/docs/php/install
require('Twilio.php'); // Loads the library

$account_sid = 'AC6683bb244ea21ef85462d2a4bc569351'; 
$auth_token = 'cd8db88120d86e2896a0364379030ce7'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$client->account->messages->create(array( 
	'To' => "+919843247769", 
	'From' => "+17134897679", 
	'Body' => "Hi now messenger is working",   
>>>>>>> origin/master
));