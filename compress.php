<<<<<<< HEAD
<?php 
$source="http://www.venbaventures.com/stuforia/profilepic/eye.jpg";
$destination="http://www.venbaventures.com/stuforia/profilepic/eye.jpg";
$quality="30";
function compress($source, $destination, $quality) 
{ $info = getimagesize($source); 
if ($info['mime'] == 'image/jpeg') 
	$image = imagecreatefromjpeg($source); 
elseif ($info['mime'] == 'image/gif')
 $image = imagecreatefromgif($source);
 elseif ($info['mime'] == 'image/png') 
 $image = imagecreatefrompng($source); 
 imagejpeg($image, $destination, $quality);
 return $destination; }
 $source_img = 'source.jpg';
 $destination_img = 'destination.jpg';
 $d = compress($source_img, $destination_img, 90);
=======
<?php 
$source="http://www.venbaventures.com/stuforia/profilepic/eye.jpg";
$destination="http://www.venbaventures.com/stuforia/profilepic/eye.jpg";
$quality="30";
function compress($source, $destination, $quality) 
{ $info = getimagesize($source); 
if ($info['mime'] == 'image/jpeg') 
	$image = imagecreatefromjpeg($source); 
elseif ($info['mime'] == 'image/gif')
 $image = imagecreatefromgif($source);
 elseif ($info['mime'] == 'image/png') 
 $image = imagecreatefrompng($source); 
 imagejpeg($image, $destination, $quality);
 return $destination; }
 $source_img = 'source.jpg';
 $destination_img = 'destination.jpg';
 $d = compress($source_img, $destination_img, 90);
>>>>>>> origin/master
 ?> 