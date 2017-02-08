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
				$univ_array_length=count($univ_array);
			   if($univ_array_length===1)
			   {
				    echo "0";
					exit;
			   }  
			   else
				   $short_listed_university=ltrim($short_listed_university,",");
				 $sql="SELECT * from `university` WHERE `id` IN ($short_listed_university) ORDER BY `university_name`";
				$i=mysql_query($sql,$con);
				 while($row = mysql_fetch_array($i))
                {
					$logo=$row['logo_file'];
						$logo="logo/logo/".$logo.".jpg";
						if(file_exists ( $logo )){
							$row['logo_file']=$logo;
						}else{
							$logo=$row['logo_file'];
							$logo="logo/logo/".$logo.".png";
							if(file_exists ( $logo )){
								$row['logo_file']=$logo;
							}else{
								$row['logo_file']="logo/logo/default.png";
							}
						}
						$row['logo_file']="http://www.venbaventures.com/stuforia/".$row['logo_file'];
                  $r[]=$row;
                  $check=$row['id'];
                 }
				  
                 
    if (!$result) {
     echo "updated_problem_in_database";
    }
    else {
		 echo json_encode($r);
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
				$univ_array_length=count($univ_array);
			   if($univ_array_length===1)
			   {
				    echo "0";
					exit;
			   }  
			   else
				   $short_listed_university=ltrim($short_listed_university,",");
				 $sql="SELECT * from `university` WHERE `id` IN ($short_listed_university) ORDER BY `university_name`";
				$i=mysql_query($sql,$con);
				 while($row = mysql_fetch_array($i))
                {
					$logo=$row['logo_file'];
						$logo="logo/logo/".$logo.".jpg";
						if(file_exists ( $logo )){
							$row['logo_file']=$logo;
						}else{
							$logo=$row['logo_file'];
							$logo="logo/logo/".$logo.".png";
							if(file_exists ( $logo )){
								$row['logo_file']=$logo;
							}else{
								$row['logo_file']="logo/logo/default.png";
							}
						}
						$row['logo_file']="http://www.venbaventures.com/stuforia/".$row['logo_file'];
                  $r[]=$row;
                  $check=$row['id'];
                 }
				  
                 
    if (!$result) {
     echo "updated_problem_in_database";
    }
    else {
		 echo json_encode($r);
    }
   mysql_close($con);
?>
>>>>>>> origin/master
