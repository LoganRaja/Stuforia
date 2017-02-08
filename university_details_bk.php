<<<<<<< HEAD
 
<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);
$r=array();
            require_once("config.php");
		    $to = $_REQUEST['to'];
			$to=(int)$to * 15;
			$var=15;
        
		$sql="SELECT COUNT(*) FROM `university`";
      $result = mysql_query($sql);
     while ($row = mysql_fetch_array($result)){
        $count=$row['0'];
    }
			  mysql_select_db("A937473_stuforia", $con);
              $sql="SELECT `id`,`university_name`,`address`,`latitude`,`longitude`,`logo_file` from `university` ORDER BY `university_name` LIMIT ".$to.",".$var;
				$i=mysql_query($sql,$con);
               $check='';
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
						$row['count']=$count;
                  $r[]=$row;
                  $check=$row['id'];
                 }
				 
                  if($check==NULL)
                   {            
                      $r["re"]="Record is not available";
                      echo json_encode($r);
                 
                     }
                   else
                     {  
						array_walk_recursive($r, function(&$value, $key) {
							if (is_string($value)) {
								$value = iconv('windows-1252', 'utf-8', $value);
							}
						});
                        echo json_encode($r);
                     } 
					   mysql_close($con);
		 
=======
 
<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);
$r=array();
            require_once("config.php");
		    $to = $_REQUEST['to'];
			$to=(int)$to * 15;
			$var=15;
        
		$sql="SELECT COUNT(*) FROM `university`";
      $result = mysql_query($sql);
     while ($row = mysql_fetch_array($result)){
        $count=$row['0'];
    }
			  mysql_select_db("A937473_stuforia", $con);
              $sql="SELECT `id`,`university_name`,`address`,`latitude`,`longitude`,`logo_file` from `university` ORDER BY `university_name` LIMIT ".$to.",".$var;
				$i=mysql_query($sql,$con);
               $check='';
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
						$row['count']=$count;
                  $r[]=$row;
                  $check=$row['id'];
                 }
				 
                  if($check==NULL)
                   {            
                      $r["re"]="Record is not available";
                      echo json_encode($r);
                 
                     }
                   else
                     {  
						array_walk_recursive($r, function(&$value, $key) {
							if (is_string($value)) {
								$value = iconv('windows-1252', 'utf-8', $value);
							}
						});
                        echo json_encode($r);
                     } 
					   mysql_close($con);
		 
>>>>>>> origin/master
?>