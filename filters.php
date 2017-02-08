<<<<<<< HEAD
 
<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);
              require_once "config.php";   
              function distance($lat1, $lon1, $lat2, $lon2, $unit) {

                  $theta = $lon1 - $lon2;
                  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                  $dist = acos($dist);
                  $dist = rad2deg($dist);
                  $miles = $dist * 60 * 1.1515;
                  $unit = strtoupper($unit);

                  if ($unit == "K") {
                    return ($miles * 1.609344);
                  } else if ($unit == "N") {
                      return ($miles * 0.8684);
                    } else {
                        return $miles;
                      }
                }

			  mysql_select_db("A937473_stuforia", $con);
			  $timezone=$_REQUEST['timezone'];
			  $coursetype=$_REQUEST['coursetype'];
			  $course=$_REQUEST['course'];
			  $city=$_REQUEST['city'];
			  $state=$_REQUEST['state'];
			  $gre_verbal=$_REQUEST['gre_verbal'];
			  $gre_quantitative=$_REQUEST['gre_quantitative'];
			  $gmat=$_REQUEST['gmat'];
			  $ielts=$_REQUEST['ielts'];
			  $pte=$_REQUEST['pte'];
			  $tofel_computer=$_REQUEST['tofel_computer'];
			  $tofel_internet=$_REQUEST['tofel_internet'];
			  $fees=$_REQUEST['fees'];

              $myfile = fopen("log.txt", "w") or die("Unable to open file!");
                
                fwrite($myfile, $timezone."\n");
                
                fwrite($myfile, $coursetype."\n");
                fwrite($myfile, $course."\n");
                fwrite($myfile, $city."\n");
                fwrite($myfile, $state."\n");
                fwrite($myfile, $gre_verbal."\n");
                fwrite($myfile, $gre_quantitative."\n");
                fwrite($myfile, $gmat."\n");
                fwrite($myfile, $ielts."\n");
                fwrite($myfile, $pte."\n");
                fwrite($myfile, $tofel_computer."\n");
                fwrite($myfile, $tofel_internet."\n");
                fwrite($myfile, $fees."\n");
                
                
			  $where='';
			   $timezone=rtrim($timezone,",");
	             if($timezone!='')
				 {
					 $where.="`university`.`time_zone` IN ($timezone) AND ";
				 }
				 if($coursetype!='ALL')
				 {
					 $where.="`courses`.`MBA/MS`='$coursetype' AND ";
				 }
				 if($course!='ALL')
				 {
					 $where.="`courses`.`course name`='$course' AND ";
				 }
				 if($state!='ALL')
				 {
					$where.="`university`.`state`='$state' AND ";
				 }
				 if($city!='ALL')
				 {
                    
					$where.= "`university`.`city`='$city' AND ";
				 }
				 if($gre_verbal!='')
				 {
					$where.= "`courses`.`gre_verbal`<='$gre_verbal' AND ";
				 }
				 if($gre_quantitative!='')
				 {
					$where.= "`courses`.`gre_quantitative`<='$gre_quantitative' AND ";
				 }
				 if($gmat!='')
				 {
					$where.= "`courses`.`gmat`<='$gmat' AND ";
				 }
				 if($ielts!='')
				 {
					$where.= "`courses`.`ielts`<='$ielts' AND ";
				 }
				 if($pte!='')
				 {
					$where.= "`courses`.`pte`<='$pte' AND ";
				 }
				 if($tofel_computer!='')
				 {
					$where.= "`courses`.`toefl_computerbased`<='$tofel_computer' AND ";
				 }
				 if($tofel_internet!='')
				 {
					$where.= "`courses`.`toefl_internet_based`<='$tofel_internet' AND ";
				 }
				 if($fees!='')
				 {
					$where.= "`courses`.`fees_structure`<=$fees AND ";
				 }
				$where=rtrim($where," AND ");
				if($where=='')
				{
					$where="1";
				}
				  $sql="SELECT  
                  DISTINCT  `university`.`id`,`university`.`university_name`,`university`.`address`,`university`.`latitude`,`university`.`longitude`,`university`.`logo_file` FROM `university` 
                   INNER JOIN  `courses` ON  `university`.`id` =  `courses`.`univ_id`
                    WHERE".' '.$where." ORDER BY `university`.`university_name`";
					//echo $sql;
                    fwrite($myfile, $sql."\n");
						$i=mysql_query($sql);
               $check='';
			    $r=array();
               while($row = mysql_fetch_array($i))
                {
				  if(isset($_REQUEST['proximity'])){
				      
                      
                      $address = $city.",".$state.",US";
                      $prepAddr = str_replace(' ','+',$address);
                      $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
                      $output= json_decode($geocode);
                      $latitude = $output->results[0]->geometry->location->lat;
                      $longitude = $output->results[0]->geometry->location->lng;
                      $distance=distance($row['latitude'],$row['longitude'],$latitude,$longitude,"M");
                      $distance=round($distance,2);
                      if($distance<=300){
                          $row['distance']=$distance;

                          $logo=$row['logo_file'];
						$logo="logo/logo/".$logo.".jpg";
						if(file_exists ( $logo )){
							$row['logo_file']=$logo;
						}else{
							$logo=$row['logo_file'];
							$logo="logo/logo/".$logo.".png";
							if(file_exists ( $logo )){
								$row['logo_file']=$logo;
							}else{
								$row['logo_file']="logo/logo/default.png";
							}
						}
						$row['logo_file']="http://www.venbaventures.com/stuforia/".$row['logo_file'];

                          $r[]=$row;
                          $check=$row['id']; 
                      }

				  }else{
                      $logo=$row['logo_file'];
						$logo="logo/logo/".$logo.".jpg";
						if(file_exists ( $logo )){
							$row['logo_file']=$logo;
						}else{
							$logo=$row['logo_file'];
							$logo="logo/logo/".$logo.".png";
							if(file_exists ( $logo )){
								$row['logo_file']=$logo;
							}else{
								$row['logo_file']="logo/logo/default.png";
							}
						}
						$row['logo_file']="http://www.venbaventures.com/stuforia/".$row['logo_file'];
				     $r[]=$row;
                    $check=$row['id']; 
				  }
                  		
                  
                 }
				 
                  if($check==NULL)
                   {            
                      $r["re"]="Record is not available";
                      echo json_encode($r);
                      fwrite($myfile, json_encode($r)."\n");
                 
                     }
                   else
                     {  
						array_walk_recursive($r, function(&$value, $key) {
							if (is_string($value)) {
								$value = iconv('windows-1252', 'utf-8', $value);
							}
						});
                        echo json_encode($r);
                        fwrite($myfile, json_encode($r)."\n");
                     } 
					   mysql_close($con);

		   fclose($myfile);
=======
 
<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);
              require_once "config.php";   
              function distance($lat1, $lon1, $lat2, $lon2, $unit) {

                  $theta = $lon1 - $lon2;
                  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                  $dist = acos($dist);
                  $dist = rad2deg($dist);
                  $miles = $dist * 60 * 1.1515;
                  $unit = strtoupper($unit);

                  if ($unit == "K") {
                    return ($miles * 1.609344);
                  } else if ($unit == "N") {
                      return ($miles * 0.8684);
                    } else {
                        return $miles;
                      }
                }

			  mysql_select_db("A937473_stuforia", $con);
			  $timezone=$_REQUEST['timezone'];
			  $coursetype=$_REQUEST['coursetype'];
			  $course=$_REQUEST['course'];
			  $city=$_REQUEST['city'];
			  $state=$_REQUEST['state'];
			  $gre_verbal=$_REQUEST['gre_verbal'];
			  $gre_quantitative=$_REQUEST['gre_quantitative'];
			  $gmat=$_REQUEST['gmat'];
			  $ielts=$_REQUEST['ielts'];
			  $pte=$_REQUEST['pte'];
			  $tofel_computer=$_REQUEST['tofel_computer'];
			  $tofel_internet=$_REQUEST['tofel_internet'];
			  $fees=$_REQUEST['fees'];

              $myfile = fopen("log.txt", "w") or die("Unable to open file!");
                
                fwrite($myfile, $timezone."\n");
                
                fwrite($myfile, $coursetype."\n");
                fwrite($myfile, $course."\n");
                fwrite($myfile, $city."\n");
                fwrite($myfile, $state."\n");
                fwrite($myfile, $gre_verbal."\n");
                fwrite($myfile, $gre_quantitative."\n");
                fwrite($myfile, $gmat."\n");
                fwrite($myfile, $ielts."\n");
                fwrite($myfile, $pte."\n");
                fwrite($myfile, $tofel_computer."\n");
                fwrite($myfile, $tofel_internet."\n");
                fwrite($myfile, $fees."\n");
                
                
			  $where='';
			   $timezone=rtrim($timezone,",");
	             if($timezone!='')
				 {
					 $where.="`university`.`time_zone` IN ($timezone) AND ";
				 }
				 if($coursetype!='ALL')
				 {
					 $where.="`courses`.`MBA/MS`='$coursetype' AND ";
				 }
				 if($course!='ALL')
				 {
					 $where.="`courses`.`course name`='$course' AND ";
				 }
				 if($state!='ALL')
				 {
					$where.="`university`.`state`='$state' AND ";
				 }
				 if($city!='ALL')
				 {
                    
					$where.= "`university`.`city`='$city' AND ";
				 }
				 if($gre_verbal!='')
				 {
					$where.= "`courses`.`gre_verbal`<='$gre_verbal' AND ";
				 }
				 if($gre_quantitative!='')
				 {
					$where.= "`courses`.`gre_quantitative`<='$gre_quantitative' AND ";
				 }
				 if($gmat!='')
				 {
					$where.= "`courses`.`gmat`<='$gmat' AND ";
				 }
				 if($ielts!='')
				 {
					$where.= "`courses`.`ielts`<='$ielts' AND ";
				 }
				 if($pte!='')
				 {
					$where.= "`courses`.`pte`<='$pte' AND ";
				 }
				 if($tofel_computer!='')
				 {
					$where.= "`courses`.`toefl_computerbased`<='$tofel_computer' AND ";
				 }
				 if($tofel_internet!='')
				 {
					$where.= "`courses`.`toefl_internet_based`<='$tofel_internet' AND ";
				 }
				 if($fees!='')
				 {
					$where.= "`courses`.`fees_structure`<=$fees AND ";
				 }
				$where=rtrim($where," AND ");
				if($where=='')
				{
					$where="1";
				}
				  $sql="SELECT  
                  DISTINCT  `university`.`id`,`university`.`university_name`,`university`.`address`,`university`.`latitude`,`university`.`longitude`,`university`.`logo_file` FROM `university` 
                   INNER JOIN  `courses` ON  `university`.`id` =  `courses`.`univ_id`
                    WHERE".' '.$where." ORDER BY `university`.`university_name`";
					//echo $sql;
                    fwrite($myfile, $sql."\n");
						$i=mysql_query($sql);
               $check='';
			    $r=array();
               while($row = mysql_fetch_array($i))
                {
				  if(isset($_REQUEST['proximity'])){
				      
                      
                      $address = $city.",".$state.",US";
                      $prepAddr = str_replace(' ','+',$address);
                      $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
                      $output= json_decode($geocode);
                      $latitude = $output->results[0]->geometry->location->lat;
                      $longitude = $output->results[0]->geometry->location->lng;
                      $distance=distance($row['latitude'],$row['longitude'],$latitude,$longitude,"M");
                      $distance=round($distance,2);
                      if($distance<=300){
                          $row['distance']=$distance;

                          $logo=$row['logo_file'];
						$logo="logo/logo/".$logo.".jpg";
						if(file_exists ( $logo )){
							$row['logo_file']=$logo;
						}else{
							$logo=$row['logo_file'];
							$logo="logo/logo/".$logo.".png";
							if(file_exists ( $logo )){
								$row['logo_file']=$logo;
							}else{
								$row['logo_file']="logo/logo/default.png";
							}
						}
						$row['logo_file']="http://www.venbaventures.com/stuforia/".$row['logo_file'];

                          $r[]=$row;
                          $check=$row['id']; 
                      }

				  }else{
                      $logo=$row['logo_file'];
						$logo="logo/logo/".$logo.".jpg";
						if(file_exists ( $logo )){
							$row['logo_file']=$logo;
						}else{
							$logo=$row['logo_file'];
							$logo="logo/logo/".$logo.".png";
							if(file_exists ( $logo )){
								$row['logo_file']=$logo;
							}else{
								$row['logo_file']="logo/logo/default.png";
							}
						}
						$row['logo_file']="http://www.venbaventures.com/stuforia/".$row['logo_file'];
				     $r[]=$row;
                    $check=$row['id']; 
				  }
                  		
                  
                 }
				 
                  if($check==NULL)
                   {            
                      $r["re"]="Record is not available";
                      echo json_encode($r);
                      fwrite($myfile, json_encode($r)."\n");
                 
                     }
                   else
                     {  
						array_walk_recursive($r, function(&$value, $key) {
							if (is_string($value)) {
								$value = iconv('windows-1252', 'utf-8', $value);
							}
						});
                        echo json_encode($r);
                        fwrite($myfile, json_encode($r)."\n");
                     } 
					   mysql_close($con);

		   fclose($myfile);
>>>>>>> origin/master
?>