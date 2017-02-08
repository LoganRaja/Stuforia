<<<<<<< HEAD

<?php
    require_once "config.php"; 
    
    $email = $_REQUEST['email'];
    $password=$_REQUEST['password'];
    $passFromDB="";
    $sql="SELECT COUNT(*) FROM `university`";
      $result = mysql_query($sql);
     while ($row = mysql_fetch_array($result)){
        $count=$row['0'];
    }
	if($email==="skip_for_now")
	{
		echo $count;
		exit;
	}
	
	$sql="SELECT MAX(`id`) FROM `news_feed`";
      $result = mysql_query($sql);
     while ($row = mysql_fetch_array($result)){
        $newnotification=$row['0'];
		break;
    }
    $sql="SELECT * FROM `Login` WHERE `email`='$email'";
    
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $passFromDB=$row['password'];
        $row['universitycount']=$count;
		$row['newnotification']=$newnotification;
        $id=$row['id'];
    }
    if(password_verify($password,$passFromDB)){
        
		$last_signin=date("Y-m-d H:i:s");
       $session=md5($email);
        $sql="SELECT * FROM `profile` WHERE `id`='$id'";
        $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $row['universitycount']=$count;
		$row['newnotification']=$newnotification;
        $output[]=$row;        
   }
       echo json_encode($output);
		$sql= "UPDATE `Login` SET `last_signin`='$last_signin',`session`='$session' WHERE `id`='$id'";
		mysql_query($sql);
    }else{
        echo -1;
    }
   mysql_close($con);
?>
=======

<?php
    require_once "config.php"; 
    
    $email = $_REQUEST['email'];
    $password=$_REQUEST['password'];
    $passFromDB="";
    $sql="SELECT COUNT(*) FROM `university`";
      $result = mysql_query($sql);
     while ($row = mysql_fetch_array($result)){
        $count=$row['0'];
    }
	if($email==="skip_for_now")
	{
		echo $count;
		exit;
	}
	
	$sql="SELECT MAX(`id`) FROM `news_feed`";
      $result = mysql_query($sql);
     while ($row = mysql_fetch_array($result)){
        $newnotification=$row['0'];
		break;
    }
    $sql="SELECT * FROM `Login` WHERE `email`='$email'";
    
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $passFromDB=$row['password'];
        $row['universitycount']=$count;
		$row['newnotification']=$newnotification;
        $id=$row['id'];
    }
    if(password_verify($password,$passFromDB)){
        
		$last_signin=date("Y-m-d H:i:s");
       $session=md5($email);
        $sql="SELECT * FROM `profile` WHERE `id`='$id'";
        $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $row['universitycount']=$count;
		$row['newnotification']=$newnotification;
        $output[]=$row;        
   }
       echo json_encode($output);
		$sql= "UPDATE `Login` SET `last_signin`='$last_signin',`session`='$session' WHERE `id`='$id'";
		mysql_query($sql);
    }else{
        echo -1;
    }
   mysql_close($con);
?>
>>>>>>> origin/master
