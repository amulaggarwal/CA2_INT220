<?php
$files = array_filter($_FILES['fileToUpload']['name']);
$total_count = count($_FILES['fileToUpload']['name']); 


for($i=0;$i<$total_count;$i++){
$target_dir = "documents/";
$target_file = $target_dir . $_FILES['fileToUpload']['name'][$i];
$uploadConfirm = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



if (file_exists($target_file)) {
  echo "File ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"][$i]))." already exists<br>";
  $uploadConfirm = 0;
}

if (
  $fileType != "pdf" && $fileType != "png"
) {
  echo "Sorry, only PDF and PNG files are supported. <br>";
  $uploadConfirm = 0;
}

if ($uploadConfirm == 0) {
  echo "File ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"][$i]))." cannot be uploaded<br>";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"][$i])) . " has been uploaded.  <br>";
  } else {
    echo "Sorry, there was an error uploading your documents. <br>";
  }
}
}