<<<<<<< HEAD
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$image_type=$_REQUEST['image_type'];
	$name=$_REQUEST['name'];
	if($image_type==="passport"){
		$sql= "UPDATE `profile` SET `passport_image`='' WHERE `id`='$id'";
		if(mysql_query($sql)){
		echo "success";
        $image="profileattch/"."".$name;
		unlink($image);
         $thm_image="profileattch/thm_".$name;
		unlink($thm_image);
	}
	else{
		echo "failed";
	}
		}
	if($image_type==="i20"){
		$sql= "UPDATE `profile` SET `i20_image`='' WHERE `id`='$id'";
		if(mysql_query($sql)){
		echo "success";
		$image="profileattch/"."".$name;
		unlink($image);
         $thm_image="profileattch/thm_".$name;
		unlink($thm_image);
	}
	else{
		echo "failed";
	}
}
if($image_type==="profliepic"){
		$sql= "UPDATE `profile` SET `profilepic`='http://www.venbaventures.com/stuforia/profilepic/default.jpg' WHERE `id`='$id'";
		if(mysql_query($sql)){
		echo "success";
		$name=md5($id);
		$name=$name.".jpg";
		$image="profilepic/"."".$name;
		unlink($image);
	}
	else{
		echo "failed";
	}
}
   mysql_close($con);
?>
=======
<?php 
   require_once "config.php";  
    $id=$_REQUEST['id'];
	$image_type=$_REQUEST['image_type'];
	$name=$_REQUEST['name'];
	if($image_type==="passport"){
		$sql= "UPDATE `profile` SET `passport_image`='' WHERE `id`='$id'";
		if(mysql_query($sql)){
		echo "success";
        $image="profileattch/"."".$name;
		unlink($image);
         $thm_image="profileattch/thm_".$name;
		unlink($thm_image);
	}
	else{
		echo "failed";
	}
		}
	if($image_type==="i20"){
		$sql= "UPDATE `profile` SET `i20_image`='' WHERE `id`='$id'";
		if(mysql_query($sql)){
		echo "success";
		$image="profileattch/"."".$name;
		unlink($image);
         $thm_image="profileattch/thm_".$name;
		unlink($thm_image);
	}
	else{
		echo "failed";
	}
}
if($image_type==="profliepic"){
		$sql= "UPDATE `profile` SET `profilepic`='http://www.venbaventures.com/stuforia/profilepic/default.jpg' WHERE `id`='$id'";
		if(mysql_query($sql)){
		echo "success";
		$name=md5($id);
		$name=$name.".jpg";
		$image="profilepic/"."".$name;
		unlink($image);
	}
	else{
		echo "failed";
	}
}
   mysql_close($con);
?>
>>>>>>> origin/master
