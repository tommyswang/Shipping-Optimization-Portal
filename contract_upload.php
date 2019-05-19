<?php
require('config.php');
if(isset($_POST['file_submit'])) {

  // Get the file
  $id = $_GET['id'];
  $file = $_FILES["file"]["tmp_name"];
  // Get contents of the file
  $file_contents = file_get_contents($file);
  // Get the file extension
  $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
  if($ext === 'csv') {
    if ($_FILES["file"]["size"] > 0) {
      $handle = fopen($file,"r");
      $flag = true;
        //loop through the csv file and insert into database
      while (($data = fgetcsv($handle,10000,",")) !== FALSE) {
         if($flag) { $flag = false; continue; }

          $query = "INSERT INTO contract (vendor, ship_within, carriers, address, city, state, postal)
                    VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]')";

          $res = mysqli_query($connection, $query);
        }
    fclose($handle);
     }
  }


}



 ?>
