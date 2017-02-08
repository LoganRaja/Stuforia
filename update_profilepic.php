<<<<<<< HEAD
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$profilepic=$_REQUEST['profilepic'];
	$link="http://www.venbaventures.com/stuforia/profilepic/";
	$profilepic=$link.''.$profilepic;
		$sql= "UPDATE `profile` SET `profilepic`='$profilepic' WHERE `id`='$id'";
    $result = mysql_query($sql);
   mysql_close($con);
?>
=======
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$profilepic=$_REQUEST['profilepic'];
	$link="http://www.venbaventures.com/stuforia/profilepic/";
	$profilepic=$link.''.$profilepic;
		$sql= "UPDATE `profile` SET `profilepic`='$profilepic' WHERE `id`='$id'";
    $result = mysql_query($sql);
   mysql_close($con);
?>
>>>>>>> origin/master
