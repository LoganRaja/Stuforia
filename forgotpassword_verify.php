<<<<<<< HEAD
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$verificationcode=$_REQUEST['verificationcode'];
	$verificationcode=md5($verificationcode);
	$sql="SELECT `forgot_password` FROM `Login` WHERE `id`='$id'";
      $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $passFromDB=$row['forgot_password'];
	}
	if(!$result)
	 {
		 echo -1;
		 exit;
	 }
	if($passFromDB===$verificationcode)
	{
		echo "match";
	}
	else
		 echo "not_match";
	    
   mysql_close($con);
?>
=======
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$verificationcode=$_REQUEST['verificationcode'];
	$verificationcode=md5($verificationcode);
	$sql="SELECT `forgot_password` FROM `Login` WHERE `id`='$id'";
      $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $passFromDB=$row['forgot_password'];
	}
	if(!$result)
	 {
		 echo -1;
		 exit;
	 }
	if($passFromDB===$verificationcode)
	{
		echo "match";
	}
	else
		 echo "not_match";
	    
   mysql_close($con);
?>
>>>>>>> origin/master
