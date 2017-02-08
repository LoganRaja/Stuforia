<<<<<<< HEAD
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$pdf_type=$_REQUEST['pdf_type'];
	$name=$_REQUEST['name'];
	if($pdf_type==="FS")
		$sql= "UPDATE `profile` SET `template_fs`='$name' WHERE `id`='$id'";
	if($pdf_type==="AOSA")
		$sql= "UPDATE `profile` SET `template_asa`='$name' WHERE `id`='$id'";
	if($pdf_type==="AOSV")
		$sql= "UPDATE `profile` SET `template_asv`='$name' WHERE `id`='$id'";
        if($pdf_type==="LOR")
		$sql= "UPDATE `profile` SET `template_lor`='$name' WHERE `id`='$id'";
        if($pdf_type==="SOP")
		$sql= "UPDATE `profile` SET `template_sop`='$name' WHERE `id`='$id'";
	if(mysql_query($sql)){
		echo "success";
	}
	else{
		echo "failed";
	}
   mysql_close($con);
?>
=======
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$pdf_type=$_REQUEST['pdf_type'];
	$name=$_REQUEST['name'];
	if($pdf_type==="FS")
		$sql= "UPDATE `profile` SET `template_fs`='$name' WHERE `id`='$id'";
	if($pdf_type==="AOSA")
		$sql= "UPDATE `profile` SET `template_asa`='$name' WHERE `id`='$id'";
	if($pdf_type==="AOSV")
		$sql= "UPDATE `profile` SET `template_asv`='$name' WHERE `id`='$id'";
        if($pdf_type==="LOR")
		$sql= "UPDATE `profile` SET `template_lor`='$name' WHERE `id`='$id'";
        if($pdf_type==="SOP")
		$sql= "UPDATE `profile` SET `template_sop`='$name' WHERE `id`='$id'";
	if(mysql_query($sql)){
		echo "success";
	}
	else{
		echo "failed";
	}
   mysql_close($con);
?>
>>>>>>> origin/master
