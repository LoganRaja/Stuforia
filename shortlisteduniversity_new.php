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
				$univ_array=explode(',',$short_listed_university);
				if($mode==="add")
				{	
				$univ_array[]=$univ;
                $short_listed_university=implode(",",$univ_array);
               $sql= "UPDATE `profile` SET `shortlisted_univ`='$short_listed_university' WHERE `id`='$id'";
               $result = mysql_query($sql);
	}
	else
	{
		$key=array_search($univ,$univ_array);
		unset($univ_array[$key]);
		$short_listed_university=implode(",",$univ_array);
			
               $sql= "UPDATE `profile` SET `shortlisted_univ`='$short_listed_university' WHERE `id`='$id'";
            
        $result = mysql_query($sql);
	}		
    if (!$result) {
     echo "updated_problem_in_database";
    }
    else {
     echo "Record_updated_successfully";
    }
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
				$univ_array=explode(',',$short_listed_university);
				if($mode==="add")
				{	
				$univ_array[]=$univ;
                $short_listed_university=implode(",",$univ_array);
               $sql= "UPDATE `profile` SET `shortlisted_univ`='$short_listed_university' WHERE `id`='$id'";
               $result = mysql_query($sql);
	}
	else
	{
		$key=array_search($univ,$univ_array);
		unset($univ_array[$key]);
		$short_listed_university=implode(",",$univ_array);
			
               $sql= "UPDATE `profile` SET `shortlisted_univ`='$short_listed_university' WHERE `id`='$id'";
            
        $result = mysql_query($sql);
	}		
    if (!$result) {
     echo "updated_problem_in_database";
    }
    else {
     echo "Record_updated_successfully";
    }
   mysql_close($con);
?>
>>>>>>> origin/master
