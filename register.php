<<<<<<< HEAD
<?php
    
   // ini_set('display_errors', 1);
    require_once "config.php";
    $fullname = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $phone_no = $_REQUEST['phone'];
    $status = "pending";
    $password = $_REQUEST['password'];
    $forgot_password = "";
    $options = ['cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM) ];
    $password=password_hash($password, PASSWORD_BCRYPT, $options);
    $created = date("Y-m-d H:i:s");
    $modified = $created;  
    $sql="SELECT `id` FROM `Login` WHERE `email`='$email' OR `phone_no`='$phone_no'";
    $result = mysql_query($sql);
     if(mysql_num_rows($result)==0){
            $q = "INSERT INTO `Login`(`id`,`fullname`,`email`,`phone_no`,`status`,`password`,`forgot_password`,`created`,`modified`) VALUES('','$fullname','$email','$phone_no','$status','$password','$forgot_password','$created','$modified')";
            $s = mysql_query($q);
            if($s){
                $sql="SELECT `id` FROM `Login` WHERE `email`='$email'";
                $result = mysql_query($sql);
                while ($row = mysql_fetch_array($result)){
                    $id=$row['id'];
                 }
            $sql= "INSERT INTO `profile`
(`id`,`firstname`,`lastname`,`father_name`,`father_age`,`mother_name`,`mother_age`,`account_number`,`gender`,`DOB`,`address`,`state`,`city`,`pincode`,`nationality`,
			`mobilenumber`,`email`,`passportnumber`,`shortlisted_univ`,`hsc_education`,`ug_education`,`work_from`,`work_to`,`gre_score`,`gmat_score`,`toefl_score`,`ielts_score`,`pte_score`,`profilepic`) VALUES
			('$id','$fullname','','','','','','','','','','','','','','$phone_no','$email','','','','','','','','','','','','http://www.venbaventures.com/stuforia/profilepic/default.jpg')";
   
          $result = mysql_query($sql);
                if (!$result) {
                    //failed to insert
                    echo "0";
                }
                else {
                    //Success
                    echo "1";
                }
            }
         
     }else{

       //User already registered
         echo "-1";       
     } 
   mysql_close($con);
?>
=======
<?php
    
   // ini_set('display_errors', 1);
    require_once "config.php";
    $fullname = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $phone_no = $_REQUEST['phone'];
    $status = "pending";
    $password = $_REQUEST['password'];
    $forgot_password = "";
    $options = ['cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM) ];
    $password=password_hash($password, PASSWORD_BCRYPT, $options);
    $created = date("Y-m-d H:i:s");
    $modified = $created;  
    $sql="SELECT `id` FROM `Login` WHERE `email`='$email' OR `phone_no`='$phone_no'";
    $result = mysql_query($sql);
     if(mysql_num_rows($result)==0){
            $q = "INSERT INTO `Login`(`id`,`fullname`,`email`,`phone_no`,`status`,`password`,`forgot_password`,`created`,`modified`) VALUES('','$fullname','$email','$phone_no','$status','$password','$forgot_password','$created','$modified')";
            $s = mysql_query($q);
            if($s){
                $sql="SELECT `id` FROM `Login` WHERE `email`='$email'";
                $result = mysql_query($sql);
                while ($row = mysql_fetch_array($result)){
                    $id=$row['id'];
                 }
            $sql= "INSERT INTO `profile`
(`id`,`firstname`,`lastname`,`father_name`,`father_age`,`mother_name`,`mother_age`,`account_number`,`gender`,`DOB`,`address`,`state`,`city`,`pincode`,`nationality`,
			`mobilenumber`,`email`,`passportnumber`,`shortlisted_univ`,`hsc_education`,`ug_education`,`work_from`,`work_to`,`gre_score`,`gmat_score`,`toefl_score`,`ielts_score`,`pte_score`,`profilepic`) VALUES
			('$id','$fullname','','','','','','','','','','','','','','$phone_no','$email','','','','','','','','','','','','http://www.venbaventures.com/stuforia/profilepic/default.jpg')";
   
          $result = mysql_query($sql);
                if (!$result) {
                    //failed to insert
                    echo "0";
                }
                else {
                    //Success
                    echo "1";
                }
            }
         
     }else{

       //User already registered
         echo "-1";       
     } 
   mysql_close($con);
?>
>>>>>>> origin/master
