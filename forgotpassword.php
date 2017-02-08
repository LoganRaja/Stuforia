<<<<<<< HEAD


   <?php
  // error_reporting(E_ALL); ini_set('display_errors', 1);
   function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
   
   
   
   require_once "config.php"; 
   require_once 'Swift/lib/swift_required.php';
    $email = $_REQUEST['email'];
	$sql="SELECT * FROM `Login` WHERE `email`='$email'"; 
    $result = mysql_query($sql);
	$id="";
	 while ($row = mysql_fetch_array($result)){
        $id=$row['id'];
		$name=ucfirst ( $row['fullname'] );
    }
	if($id==="")
	{
		echo -1;
		exit;
	}
	
	else{
		$verification=randomPassword();
$pEmailGmail = 'info@stuforia.com';
$pPasswordGmail = 'stufoinfo';
$pFromName = 'Stuforia'; //display name
$bannerUrl="http://www.venbaventures.com/stuforia/images/public/banner.png";
$pTo = $email; //destination email
$pSubjetc = " Request - Change Password "; //the subjetc 
$pBody = '<table align="center" cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width:500px;margin:auto">
          <tbody>
		  <tr>
            <td style="padding-top:20px">

              

                  <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="background:url('.$bannerUrl.');width:100%;height:70px;overflow:hidden">
				  
                           
                </table>

              

             

              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="background:white">
                <tbody><tr>
                  <td><br>
                    <table width="100%" style="width:100%" border="0" cellpadding="0" cellspacing="0" align="center">

                      <tbody><tr>
                        <td style="padding:10px 0 30px 0;text-align:center;width:80%;margin:auto">
                          <h1 style="color:#2d2d2a;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;text-align:center;font-size:20px;width:80%;margin:auto">Hi '.$name.'</h1><br>
                          <p style="color:#4d4d49;text-align:center;width:80%;margin:auto;font-size:16px;line-height:24px">Did you just make a request to reset your password? <a style="text-decoration:none"></a></p>
                        </td>
                      </tr>

                      <tr>
                        <td style="padding:10px 0 30px 0;text-align:center;width:80%;margin:auto">
                          <p style="color:#4d4d49;text-align:center;width:80%;margin:auto;font-size:24px;line-height:24px">Your verification code is</p>
                        </td>
                      </tr>
                          <tr>
                        <td style="padding:10px 0 30px 0;text-align:center;width:80%;margin:auto">
                          <span style="text-decoration:none;width:100%;display:inline-block"><span style="color:white;background:#2D5DA7;padding:15px 20px;font-weight:bold;font-size:14px;border-radius:3px">'.$verification.'</span></span>
                        </td>
                      </tr>

                      

                    </tbody></table>

                    <table style="padding:0px 0 40px 0;width:80%;margin:auto" border="0" cellpadding="0" cellspacing="0" align="center">
                      <tbody><tr>
                        <td style="color:#9d9d9a;text-align:center;font-size:13px;line-height:20px" align="center">
                          For any queries, please email us at <a href="mailto:enquiries@stuforia.com" style="text-decoration:none" target="_blank"><span style="color:#4d4d4a">enquiries@stuforia.com</span>.
                        </a></td>
                      </tr>
                    </tbody></table>

                  </td>
                </tr>
              </tbody></table>

              

              <table border="0" cellpadding="0" cellspacing="0" align="center" style="margin:auto">
			  
                <tbody><tr>
				
                  <td style="color:#9a9a93;font-size:11px;padding-bottom:30px;text-align:center">

                    

                  </td>
                </tr>
              </tbody></table>
			  
			  </td></tr>
			  </tbody>
			  </table>'; //body html

$transport = Swift_SmtpTransport::newInstance('localhost', 25)
            ->setUsername($pEmailGmail)
            ->setPassword($pPasswordGmail);

$mMailer = Swift_Mailer::newInstance($transport);



$mEmail = Swift_Message::newInstance();
$mEmail->setSubject($pSubjetc);
$mEmail->setTo($pTo);
$mEmail->setFrom(array($pEmailGmail => $pFromName));
$mEmail->setBody($pBody, 'text/html'); //body html

$headers =$mEmail->getHeaders();
$headers->addIdHeader('Message-ID', "b3eb7202-d2f1-11e4-b9d6-1681e6b88ec1@venbaventures.com");
$headers->addTextHeader('MIME-Version', '1.0');
$headers->addTextHeader('X-Mailer', 'PHP v' . phpversion());
$headers->addParameterizedHeader('Content-type', 'text/html', ['charset' => 'utf-8']);

if($mMailer->send($mEmail) == 1){
    echo $id;
	 $sql="UPDATE `Login` SET `forgot_password`='".md5($verification)."'   WHERE `id`='$id'"; 
           $result = mysql_query($sql);
}
else {
    echo 'send_error';
}                          // Set email format to HTML
		  
	}

?>

=======


   <?php
  // error_reporting(E_ALL); ini_set('display_errors', 1);
   function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
   
   
   
   require_once "config.php"; 
   require_once 'Swift/lib/swift_required.php';
    $email = $_REQUEST['email'];
	$sql="SELECT * FROM `Login` WHERE `email`='$email'"; 
    $result = mysql_query($sql);
	$id="";
	 while ($row = mysql_fetch_array($result)){
        $id=$row['id'];
		$name=ucfirst ( $row['fullname'] );
    }
	if($id==="")
	{
		echo -1;
		exit;
	}
	
	else{
		$verification=randomPassword();
$pEmailGmail = 'info@stuforia.com';
$pPasswordGmail = 'stufoinfo';
$pFromName = 'Stuforia'; //display name
$bannerUrl="http://www.venbaventures.com/stuforia/images/public/banner.png";
$pTo = $email; //destination email
$pSubjetc = " Request - Change Password "; //the subjetc 
$pBody = '<table align="center" cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width:500px;margin:auto">
          <tbody>
		  <tr>
            <td style="padding-top:20px">

              

                  <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="background:url('.$bannerUrl.');width:100%;height:70px;overflow:hidden">
				  
                           
                </table>

              

             

              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="background:white">
                <tbody><tr>
                  <td><br>
                    <table width="100%" style="width:100%" border="0" cellpadding="0" cellspacing="0" align="center">

                      <tbody><tr>
                        <td style="padding:10px 0 30px 0;text-align:center;width:80%;margin:auto">
                          <h1 style="color:#2d2d2a;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;text-align:center;font-size:20px;width:80%;margin:auto">Hi '.$name.'</h1><br>
                          <p style="color:#4d4d49;text-align:center;width:80%;margin:auto;font-size:16px;line-height:24px">Did you just make a request to reset your password? <a style="text-decoration:none"></a></p>
                        </td>
                      </tr>

                      <tr>
                        <td style="padding:10px 0 30px 0;text-align:center;width:80%;margin:auto">
                          <p style="color:#4d4d49;text-align:center;width:80%;margin:auto;font-size:24px;line-height:24px">Your verification code is</p>
                        </td>
                      </tr>
                          <tr>
                        <td style="padding:10px 0 30px 0;text-align:center;width:80%;margin:auto">
                          <span style="text-decoration:none;width:100%;display:inline-block"><span style="color:white;background:#2D5DA7;padding:15px 20px;font-weight:bold;font-size:14px;border-radius:3px">'.$verification.'</span></span>
                        </td>
                      </tr>

                      

                    </tbody></table>

                    <table style="padding:0px 0 40px 0;width:80%;margin:auto" border="0" cellpadding="0" cellspacing="0" align="center">
                      <tbody><tr>
                        <td style="color:#9d9d9a;text-align:center;font-size:13px;line-height:20px" align="center">
                          For any queries, please email us at <a href="mailto:enquiries@stuforia.com" style="text-decoration:none" target="_blank"><span style="color:#4d4d4a">enquiries@stuforia.com</span>.
                        </a></td>
                      </tr>
                    </tbody></table>

                  </td>
                </tr>
              </tbody></table>

              

              <table border="0" cellpadding="0" cellspacing="0" align="center" style="margin:auto">
			  
                <tbody><tr>
				
                  <td style="color:#9a9a93;font-size:11px;padding-bottom:30px;text-align:center">

                    

                  </td>
                </tr>
              </tbody></table>
			  
			  </td></tr>
			  </tbody>
			  </table>'; //body html

$transport = Swift_SmtpTransport::newInstance('localhost', 25)
            ->setUsername($pEmailGmail)
            ->setPassword($pPasswordGmail);

$mMailer = Swift_Mailer::newInstance($transport);



$mEmail = Swift_Message::newInstance();
$mEmail->setSubject($pSubjetc);
$mEmail->setTo($pTo);
$mEmail->setFrom(array($pEmailGmail => $pFromName));
$mEmail->setBody($pBody, 'text/html'); //body html

$headers =$mEmail->getHeaders();
$headers->addIdHeader('Message-ID', "b3eb7202-d2f1-11e4-b9d6-1681e6b88ec1@venbaventures.com");
$headers->addTextHeader('MIME-Version', '1.0');
$headers->addTextHeader('X-Mailer', 'PHP v' . phpversion());
$headers->addParameterizedHeader('Content-type', 'text/html', ['charset' => 'utf-8']);

if($mMailer->send($mEmail) == 1){
    echo $id;
	 $sql="UPDATE `Login` SET `forgot_password`='".md5($verification)."'   WHERE `id`='$id'"; 
           $result = mysql_query($sql);
}
else {
    echo 'send_error';
}                          // Set email format to HTML
		  
	}

?>

>>>>>>> origin/master
