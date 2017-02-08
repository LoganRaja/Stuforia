<<<<<<< HEAD
 <?php
    
   // ini_set('display_errors', 1);
    require_once "config.php";
    $id = $_REQUEST['id'];
	$to=$_REQUEST['to'];
    $email=$_REQUEST['email'] ;
	$send=$_REQUEST['send'];
	  $time_of_message = date("Y-m-d H:i:s");
	 $sql="INSERT INTO `Chat` (`id`,`email`,`send`,`time_of_message`) VALUES ('$id','$email','$send','time_of_message')";
     $result = mysql_query($sql);
	 if($result)
	 {
		 
	 }
	 else
	 {
		 exit; 
	 }
	/* $sql="INSERT INTO `Chat` (`id`,`email`,`receive`) VALUES ('$to','$email','$send')";
     $result = mysql_query($sql);
	if($result)
	 {
		 
	 }
	  else
	 {
		exit; 
	 }*/
   mysql_close($con);
?>
=======
 <?php
    
   // ini_set('display_errors', 1);
    require_once "config.php";
    $id = $_REQUEST['id'];
	$to=$_REQUEST['to'];
    $email=$_REQUEST['email'] ;
	$send=$_REQUEST['send'];
	  $time_of_message = date("Y-m-d H:i:s");
	 $sql="INSERT INTO `Chat` (`id`,`email`,`send`,`time_of_message`) VALUES ('$id','$email','$send','time_of_message')";
     $result = mysql_query($sql);
	 if($result)
	 {
		 
	 }
	 else
	 {
		 exit; 
	 }
	/* $sql="INSERT INTO `Chat` (`id`,`email`,`receive`) VALUES ('$to','$email','$send')";
     $result = mysql_query($sql);
	if($result)
	 {
		 
	 }
	  else
	 {
		exit; 
	 }*/
   mysql_close($con);
?>
>>>>>>> origin/master
