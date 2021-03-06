<?php
  include('../c_product.php');


  $target_dir = "img/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $target_file = time().'.'.$target_file;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          $uploadOk = 1;
      } else {
          $uploadOk = 0;
      }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
  $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
  $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
  $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      return false;
  } else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

      



  } else {
      echo "Sorry, there was an error uploading your file.";
  }
  }

?>