<<<<<<< HEAD

<?php
    require_once "config.php"; 
    $id=$_REQUEST['id'];
		$sql= "UPDATE `Login` SET `session`='' WHERE `id`='$id'";
		$result=mysql_query($sql);
        if($result)
        {
            echo "logout";
        }
        mysql_close($con);
?>
=======

<?php
    require_once "config.php"; 
    $id=$_REQUEST['id'];
		$sql= "UPDATE `Login` SET `session`='' WHERE `id`='$id'";
		$result=mysql_query($sql);
        if($result)
        {
            echo "logout";
        }
        mysql_close($con);
?>
>>>>>>> origin/master
