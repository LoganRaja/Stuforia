<<<<<<< HEAD
<?php
    
    date_default_timezone_set('Asia/Kolkata');
    $con = mysql_connect("mysql509.ixwebhosting.com", "A937473_stuadmin", "6QYpSk");

    if (!$con) {
	    die('Could not connect: ' . mysql_error());
    }
    else {
	    ;
    }
    mysql_select_db("A937473_stuforia", $con);  
    $id=$_REQUEST['id'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
	$father_name = $_REQUEST['father_name'];
	$father_age = $_REQUEST['father_age'];
	$mother_name = $_REQUEST['mother_name'];
	$mother_age = $_REQUEST['mother_age'];
	$account_number=$_REQUEST['account_number'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    $state = $_REQUEST['state'];
     $city = $_REQUEST['city'];
      $pincode = $_REQUEST['pincode'];
	  $email=$_REQUEST['email'];
       $nationality = $_REQUEST['nationality'];
        $mobilenumber = $_REQUEST['mobilenumber'];
         $passportnumber = $_REQUEST['passportnumber'];
           $hsc_education=$_REQUEST['hsc_education'];
	       $ug_education=$_REQUEST['ug_education'];
	       $work_from=$_REQUEST['work_from'];
	       $work_to=$_REQUEST['work_to'];
		   
	
    
    $sql= "UPDATE `profile` SET `firstname`='$firstname',`lastname`='$lastname',
	`father_name`='$father_name',`father_age`='$father_age',`mother_name`='$mother_name',`mother_age`='$mother_age',`account_number`='$account_number',`email`='$email',`gender`='$gender',`DOB`='$dob',`address`='$address',`state`='$state',`city`='$city',`pincode`='$pincode',`nationality`='$nationality',`mobilenumber`='$mobilenumber',`passportnumber`='$passportnumber',`hsc_education`='$hsc_education',`ug_education`='$ug_education',`work_from`='$work_from',`work_to`='$work_to' WHERE `id`='$id'";
    $result = mysql_query($sql);
    if (!$result) {
     echo "failed";
    }
    else {
		$fullname=$firstname.' '.$lastname;
    $sql= "UPDATE `Login` SET `fullname`='$fullname',`phone_no`='$mobilenumber' WHERE `id`='$id'";
       if(mysql_query($sql)){
		   echo "update_successfully";
	   }else{
		   echo "failed";
	   }
     
    }
    
   mysql_close($con);
?>
=======
<?php
    
    date_default_timezone_set('Asia/Kolkata');
    $con = mysql_connect("mysql509.ixwebhosting.com", "A937473_stuadmin", "6QYpSk");

    if (!$con) {
	    die('Could not connect: ' . mysql_error());
    }
    else {
	    ;
    }
    mysql_select_db("A937473_stuforia", $con);  
    $id=$_REQUEST['id'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
	$father_name = $_REQUEST['father_name'];
	$father_age = $_REQUEST['father_age'];
	$mother_name = $_REQUEST['mother_name'];
	$mother_age = $_REQUEST['mother_age'];
	$account_number=$_REQUEST['account_number'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    $state = $_REQUEST['state'];
     $city = $_REQUEST['city'];
      $pincode = $_REQUEST['pincode'];
	  $email=$_REQUEST['email'];
       $nationality = $_REQUEST['nationality'];
        $mobilenumber = $_REQUEST['mobilenumber'];
         $passportnumber = $_REQUEST['passportnumber'];
           $hsc_education=$_REQUEST['hsc_education'];
	       $ug_education=$_REQUEST['ug_education'];
	       $work_from=$_REQUEST['work_from'];
	       $work_to=$_REQUEST['work_to'];
		   
	
    
    $sql= "UPDATE `profile` SET `firstname`='$firstname',`lastname`='$lastname',
	`father_name`='$father_name',`father_age`='$father_age',`mother_name`='$mother_name',`mother_age`='$mother_age',`account_number`='$account_number',`email`='$email',`gender`='$gender',`DOB`='$dob',`address`='$address',`state`='$state',`city`='$city',`pincode`='$pincode',`nationality`='$nationality',`mobilenumber`='$mobilenumber',`passportnumber`='$passportnumber',`hsc_education`='$hsc_education',`ug_education`='$ug_education',`work_from`='$work_from',`work_to`='$work_to' WHERE `id`='$id'";
    $result = mysql_query($sql);
    if (!$result) {
     echo "failed";
    }
    else {
		$fullname=$firstname.' '.$lastname;
    $sql= "UPDATE `Login` SET `fullname`='$fullname',`phone_no`='$mobilenumber' WHERE `id`='$id'";
       if(mysql_query($sql)){
		   echo "update_successfully";
	   }else{
		   echo "failed";
	   }
     
    }
    
   mysql_close($con);
?>
>>>>>>> origin/master
