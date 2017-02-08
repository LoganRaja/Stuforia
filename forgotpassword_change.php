<<<<<<< HEAD
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$passwordnew=$_REQUEST['newpassword'];
	$options = ['cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM) ];
        $password=password_hash($passwordnew,PASSWORD_BCRYPT, $options);
		$sql= "UPDATE `Login` SET `password`='$password' WHERE `id`='$id'";
      $result =  mysql_query($sql);
	  if(!$result)
	    echo -1;
	else
		 echo 1;
   mysql_close($con);
?>
=======
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$passwordnew=$_REQUEST['newpassword'];
	$options = ['cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM) ];
        $password=password_hash($passwordnew,PASSWORD_BCRYPT, $options);
		$sql= "UPDATE `Login` SET `password`='$password' WHERE `id`='$id'";
      $result =  mysql_query($sql);
	  if(!$result)
	    echo -1;
	else
		 echo 1;
   mysql_close($con);
?>
>>>>>>> origin/master
