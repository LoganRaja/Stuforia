<<<<<<< HEAD
<?php
	error_reporting(E_ALL); ini_set('display_errors', 1);
    define('THUMBNAIL_IMAGE_MAX_WIDTH', 150);
	define('THUMBNAIL_IMAGE_MAX_HEIGHT', 150);
	 if (is_uploaded_file($_FILES['uploaded_file']['tmp_name'])) {
    $uploads_dir = 'profileattch/';
                            $tmp_name = $_FILES['uploaded_file']['tmp_name'];
                            $pic_name = $_FILES['uploaded_file']['name'];
                            move_uploaded_file($tmp_name, $uploads_dir.$pic_name);
							
							$fileArray=explode('.',$picname);
							$count=count($fileArray);
							$fileArray[$count-2].="_thm";
							$destFile=implode('.',$fileArray);
							$log = fopen("log.txt", "w") or die("Unable to open file!");
							
							$source='profileattch/'.$_FILES['uploaded_file']['name'];
							fwrite($log,$source."\n");
							
							$destination='profileattch/thm_'.$_FILES['uploaded_file']['name'];
							fwrite($log,$destination."\n");
							
							fclose($myfile);
							
							generate_image_thumbnail($source,$destination);
							
                            }
               else{
                   echo "File not uploaded successfully.";
           }
		   
	
	
	

	function generate_image_thumbnail($source_image_path, $thumbnail_image_path)
	{
		list($source_image_width, $source_image_height, $source_image_type) = getimagesize($source_image_path);
		switch ($source_image_type) {
			case IMAGETYPE_GIF:
				$source_gd_image = imagecreatefromgif($source_image_path);
				break;
			case IMAGETYPE_JPEG:
				$source_gd_image = imagecreatefromjpeg($source_image_path);
				break;
			case IMAGETYPE_PNG:
				$source_gd_image = imagecreatefrompng($source_image_path);
				break;
		}
		if ($source_gd_image === false) {
			return false;
		}
		$source_aspect_ratio = $source_image_width / $source_image_height;
		$thumbnail_aspect_ratio = THUMBNAIL_IMAGE_MAX_WIDTH / THUMBNAIL_IMAGE_MAX_HEIGHT;
		if ($source_image_width <= THUMBNAIL_IMAGE_MAX_WIDTH && $source_image_height <= THUMBNAIL_IMAGE_MAX_HEIGHT) {
			$thumbnail_image_width = $source_image_width;
			$thumbnail_image_height = $source_image_height;
		} elseif ($thumbnail_aspect_ratio > $source_aspect_ratio) {
			$thumbnail_image_width = (int) (THUMBNAIL_IMAGE_MAX_HEIGHT * $source_aspect_ratio);
			$thumbnail_image_height = THUMBNAIL_IMAGE_MAX_HEIGHT;
		} else {
			$thumbnail_image_width = THUMBNAIL_IMAGE_MAX_WIDTH;
			$thumbnail_image_height = (int) (THUMBNAIL_IMAGE_MAX_WIDTH / $source_aspect_ratio);
		}
		$thumbnail_gd_image = imagecreatetruecolor($thumbnail_image_width, $thumbnail_image_height);
		imagecopyresampled($thumbnail_gd_image, $source_gd_image, 0, 0, 0, 0, $thumbnail_image_width, $thumbnail_image_height, $source_image_width, $source_image_height);
		imagejpeg($thumbnail_gd_image, $thumbnail_image_path, 90);
		imagedestroy($source_gd_image);
		imagedestroy($thumbnail_gd_image);
		return true;
	}
=======
<?php
	error_reporting(E_ALL); ini_set('display_errors', 1);
    define('THUMBNAIL_IMAGE_MAX_WIDTH', 150);
	define('THUMBNAIL_IMAGE_MAX_HEIGHT', 150);
	 if (is_uploaded_file($_FILES['uploaded_file']['tmp_name'])) {
    $uploads_dir = 'profileattch/';
                            $tmp_name = $_FILES['uploaded_file']['tmp_name'];
                            $pic_name = $_FILES['uploaded_file']['name'];
                            move_uploaded_file($tmp_name, $uploads_dir.$pic_name);
							
							$fileArray=explode('.',$picname);
							$count=count($fileArray);
							$fileArray[$count-2].="_thm";
							$destFile=implode('.',$fileArray);
							$log = fopen("log.txt", "w") or die("Unable to open file!");
							
							$source='profileattch/'.$_FILES['uploaded_file']['name'];
							fwrite($log,$source."\n");
							
							$destination='profileattch/thm_'.$_FILES['uploaded_file']['name'];
							fwrite($log,$destination."\n");
							
							fclose($myfile);
							
							generate_image_thumbnail($source,$destination);
							
                            }
               else{
                   echo "File not uploaded successfully.";
           }
		   
	
	
	

	function generate_image_thumbnail($source_image_path, $thumbnail_image_path)
	{
		list($source_image_width, $source_image_height, $source_image_type) = getimagesize($source_image_path);
		switch ($source_image_type) {
			case IMAGETYPE_GIF:
				$source_gd_image = imagecreatefromgif($source_image_path);
				break;
			case IMAGETYPE_JPEG:
				$source_gd_image = imagecreatefromjpeg($source_image_path);
				break;
			case IMAGETYPE_PNG:
				$source_gd_image = imagecreatefrompng($source_image_path);
				break;
		}
		if ($source_gd_image === false) {
			return false;
		}
		$source_aspect_ratio = $source_image_width / $source_image_height;
		$thumbnail_aspect_ratio = THUMBNAIL_IMAGE_MAX_WIDTH / THUMBNAIL_IMAGE_MAX_HEIGHT;
		if ($source_image_width <= THUMBNAIL_IMAGE_MAX_WIDTH && $source_image_height <= THUMBNAIL_IMAGE_MAX_HEIGHT) {
			$thumbnail_image_width = $source_image_width;
			$thumbnail_image_height = $source_image_height;
		} elseif ($thumbnail_aspect_ratio > $source_aspect_ratio) {
			$thumbnail_image_width = (int) (THUMBNAIL_IMAGE_MAX_HEIGHT * $source_aspect_ratio);
			$thumbnail_image_height = THUMBNAIL_IMAGE_MAX_HEIGHT;
		} else {
			$thumbnail_image_width = THUMBNAIL_IMAGE_MAX_WIDTH;
			$thumbnail_image_height = (int) (THUMBNAIL_IMAGE_MAX_WIDTH / $source_aspect_ratio);
		}
		$thumbnail_gd_image = imagecreatetruecolor($thumbnail_image_width, $thumbnail_image_height);
		imagecopyresampled($thumbnail_gd_image, $source_gd_image, 0, 0, 0, 0, $thumbnail_image_width, $thumbnail_image_height, $source_image_width, $source_image_height);
		imagejpeg($thumbnail_gd_image, $thumbnail_image_path, 90);
		imagedestroy($source_gd_image);
		imagedestroy($thumbnail_gd_image);
		return true;
	}
>>>>>>> origin/master
   ?>