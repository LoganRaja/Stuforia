<<<<<<< HEAD
 
<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);  
              require_once "config.php";
			  mysql_select_db("A937473_stuforia", $con);   
                  $id = $_REQUEST['id'];	
				$i=mysql_query("SELECT DISTINCT `state` FROM `university`",$con);
               $check='';
			   $r=array();
                while($row = mysql_fetch_array($i))
                {				
                  $r[]=$row;
				} 
						array_walk_recursive($r, function(&$value, $key) {
							if (is_string($value)) {
								$value = iconv('windows-1252', 'utf-8', $value);
							}
						});
						
                        echo json_encode($r);
                     
					   mysql_close($con);
		 
 
=======
 
<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);  
              require_once "config.php";
			  mysql_select_db("A937473_stuforia", $con);   
                  $id = $_REQUEST['id'];	
				$i=mysql_query("SELECT DISTINCT `state` FROM `university`",$con);
               $check='';
			   $r=array();
                while($row = mysql_fetch_array($i))
                {				
                  $r[]=$row;
				} 
						array_walk_recursive($r, function(&$value, $key) {
							if (is_string($value)) {
								$value = iconv('windows-1252', 'utf-8', $value);
							}
						});
						
                        echo json_encode($r);
                     
					   mysql_close($con);
		 
 
>>>>>>> origin/master
?>