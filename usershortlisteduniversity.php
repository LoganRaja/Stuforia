<<<<<<< HEAD
<?php
   require_once("config.php");
    $id=$_REQUEST['id'];	
    $univ=$_REQUEST['univ'];
	$mode=$_REQUEST['mode'];
	$sql= "SELECT `shortlisted_univ` FROM `profile` WHERE `id`='$id'";
	   $result=mysql_query($sql);
	while($row = mysql_fetch_array($result))
                {
               $short_listed_university=$row['shortlisted_univ'];	 
                 }
			   echo $short_listed_university;
   mysql_close($con);
?>
=======
<?php
   require_once("config.php");
    $id=$_REQUEST['id'];	
    $univ=$_REQUEST['univ'];
	$mode=$_REQUEST['mode'];
	$sql= "SELECT `shortlisted_univ` FROM `profile` WHERE `id`='$id'";
	   $result=mysql_query($sql);
	while($row = mysql_fetch_array($result))
                {
               $short_listed_university=$row['shortlisted_univ'];	 
                 }
			   echo $short_listed_university;
   mysql_close($con);
?>
>>>>>>> origin/master
