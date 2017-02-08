<<<<<<< HEAD
 <?php
    
   // ini_set('display_errors', 1);
    require_once "config.php";
    $id = $_REQUEST['id'];
	$to=$_REQUEST['to'];
    $email=$_REQUEST['email'] ;
	$send=$_REQUEST['send'];
	
	 $sql="SELECT * FROM `Chat` ORDER BY `auto` ASC";
     $result = mysql_query($sql);
	if($result)
	 {
		  $r=array();
               while($row = mysql_fetch_array($result))
                { 
			    $r[]=$row;
				}
	 }
	  else
	 {
		exit; 
	 }
	echo json_encode($r);
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
	
	 $sql="SELECT * FROM `Chat` ORDER BY `auto` ASC";
     $result = mysql_query($sql);
	if($result)
	 {
		  $r=array();
               while($row = mysql_fetch_array($result))
                { 
			    $r[]=$row;
				}
	 }
	  else
	 {
		exit; 
	 }
	echo json_encode($r);
   mysql_close($con);
?>
>>>>>>> origin/master
