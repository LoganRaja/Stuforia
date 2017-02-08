<<<<<<< HEAD
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$update=$_REQUEST['type'];
    $gre_score = $_REQUEST['gre_score'];
    $gmat_score = $_REQUEST['gmat_score'];
    $toefl_score = $_REQUEST['toefl_score'];
    $ielts_score = $_REQUEST['ielts_score'];
    $pte_score = $_REQUEST['pte_score'];
	if($update==="gre")
	{
		$sql= "UPDATE `profile` SET `gre_score`='$gre_score',`gmat_score`='$gmat_score' WHERE `id`='$id'";
    $result = mysql_query($sql);
	}
	else{
	 $sql= "UPDATE `profile` SET `toefl_score`='$toefl_score',`ielts_score`='$ielts_score',`pte_score`='$pte_score' WHERE `id`='$id'";
	 $result = mysql_query($sql);
	}
    if (!$result) {
     echo "wrong";
  
    }
    else {
    echo "correct";
    }
   mysql_close($con);
?>
=======
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$update=$_REQUEST['type'];
    $gre_score = $_REQUEST['gre_score'];
    $gmat_score = $_REQUEST['gmat_score'];
    $toefl_score = $_REQUEST['toefl_score'];
    $ielts_score = $_REQUEST['ielts_score'];
    $pte_score = $_REQUEST['pte_score'];
	if($update==="gre")
	{
		$sql= "UPDATE `profile` SET `gre_score`='$gre_score',`gmat_score`='$gmat_score' WHERE `id`='$id'";
    $result = mysql_query($sql);
	}
	else{
	 $sql= "UPDATE `profile` SET `toefl_score`='$toefl_score',`ielts_score`='$ielts_score',`pte_score`='$pte_score' WHERE `id`='$id'";
	 $result = mysql_query($sql);
	}
    if (!$result) {
     echo "wrong";
  
    }
    else {
    echo "correct";
    }
   mysql_close($con);
?>
>>>>>>> origin/master
