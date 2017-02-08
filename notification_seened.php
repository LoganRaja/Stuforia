
<?php
    require_once "config.php"; 
  $id = $_REQUEST['id'];
  $sql="SELECT MAX(`id`) FROM `news_feed`";
      $result = mysql_query($sql);
     while ($row = mysql_fetch_array($result)){
        $max_notification_number=$row['0'];
		break;
    }
   $sql= "UPDATE `profile` SET `seen`='$max_notification_number' WHERE `id`='$id'";
		mysql_query($sql);
   mysql_close($con);
?>
