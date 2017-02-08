<<<<<<< HEAD
<?php
     if (is_uploaded_file($_FILES['uploaded_file']['tmp_name'])) {
    $uploads_dir = 'profilepic/';
                            $tmp_name = $_FILES['uploaded_file']['tmp_name'];
                            $pic_name = $_FILES['uploaded_file']['name'];
                            move_uploaded_file($tmp_name, $uploads_dir.$pic_name);
                            }
               else{
                   echo "File not uploaded successfully.";
           }

=======
<?php
     if (is_uploaded_file($_FILES['uploaded_file']['tmp_name'])) {
    $uploads_dir = 'profilepic/';
                            $tmp_name = $_FILES['uploaded_file']['tmp_name'];
                            $pic_name = $_FILES['uploaded_file']['name'];
                            move_uploaded_file($tmp_name, $uploads_dir.$pic_name);
                            }
               else{
                   echo "File not uploaded successfully.";
           }

>>>>>>> origin/master
   ?>