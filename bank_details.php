
<?php
    require_once "config.php"; 

    $sql="SELECT * FROM `bank_details`";
    
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
        $output[]=$row;
	
    }
	array_walk_recursive($output, function(&$value, $key) {
							if (is_string($value)) {
								$value = iconv('windows-1252', 'utf-8', $value);
							}
						});
   echo json_encode($output);
   mysql_close($con);
?>
