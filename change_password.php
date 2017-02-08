<<<<<<< HEAD
<?php
   require_once("config.php");
	$id=$_REQUEST['id'];
	$password=$_REQUEST['password'];
	$passwordnew=$_REQUEST['newpassword'];
	$sql="SELECT * FROM `Login` WHERE `id`='$id'";    
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $passFromDB=$row['password'];
    }
    if(password_verify($password,$passFromDB)){
		$options = ['cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM) ];
        $password=password_hash($passwordnew,PASSWORD_BCRYPT, $options);
		$sql= "UPDATE `Login` SET `password`='$password' WHERE `id`='$id'";
        mysql_query($sql);
	    echo 1;
    }else{
        echo -1;
    }
   mysql_close($con);
?>
=======
<?php
   require_once("config.php");
	$id=$_REQUEST['id'];
	$password=$_REQUEST['password'];
	$passwordnew=$_REQUEST['newpassword'];
	$sql="SELECT * FROM `Login` WHERE `id`='$id'";    
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $passFromDB=$row['password'];
    }
    if(password_verify($password,$passFromDB)){
		$options = ['cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM) ];
        $password=password_hash($passwordnew,PASSWORD_BCRYPT, $options);
		$sql= "UPDATE `Login` SET `password`='$password' WHERE `id`='$id'";
        mysql_query($sql);
	    echo 1;
    }else{
        echo -1;
    }
   mysql_close($con);
?>
>>>>>>> origin/master
