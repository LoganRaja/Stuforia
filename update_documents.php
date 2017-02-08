<<<<<<< HEAD
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$image_type=$_REQUEST['image_type'];
	$name=$_REQUEST['name'];
	if($image_type==="passport")
		$sql= "UPDATE `profile` SET `passport_image`='$name' WHERE `id`='$id'";
	if($image_type==="i20")
		$sql= "UPDATE `profile` SET `i20_image`='$name' WHERE `id`='$id'";

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
	$image_type=$_REQUEST['image_type'];
	$name=$_REQUEST['name'];
	if($image_type==="passport")
		$sql= "UPDATE `profile` SET `passport_image`='$name' WHERE `id`='$id'";
	if($image_type==="i20")
		$sql= "UPDATE `profile` SET `i20_image`='$name' WHERE `id`='$id'";

	if(mysql_query($sql)){
		echo "success";
	}
	else{
		echo "failed";
	}
   mysql_close($con);
?>
>>>>>>> origin/master
