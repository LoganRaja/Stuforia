<<<<<<< HEAD

<?php
    require_once "config.php";   
    $id = $_REQUEST['id'];
    $sql="SELECT * FROM `profile` WHERE `id`='$id'";  
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $r[]=$row;
    }   
    echo json_encode($r);
   mysql_close($con);
?>
=======

<?php
    require_once "config.php";   
    $id = $_REQUEST['id'];
    $sql="SELECT * FROM `profile` WHERE `id`='$id'";  
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $r[]=$row;
    }   
    echo json_encode($r);
   mysql_close($con);
?>
>>>>>>> origin/master
