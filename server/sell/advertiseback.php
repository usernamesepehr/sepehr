<?php

include("../../template/connect.php");



$teachername = $_POST["teachername"];
$coursetopic = $_POST["coursetopic"];
$price = $_POST["price"];





  $sql = "INSERT INTO course (teachername, coursetopic, price)
VALUES ('$teachername', '$coursetopic', '$price')";


$target_dir = "../../template/";
$target_file = $target_dir . basename($_FILES["courseupload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = preg_match('/video\/*/',$_FILES['courseupload']['type']);
  if($check == false) {
    echo "the file is not video";
    $uploadOk = 0;

  } else{
    $uploadOk = 1;    }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "the file already uploaded";
  $uploadOk = 0;
  
}

// Check file size
if ($_FILES["photo"]["size"] > 4000000000) {
echo "file size is too high"
  $uploadOk = 0;
  
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 1) {
  if (move_uploaded_file($_FILES["courseupload"]["tmp_name"], $target_file)) {
    echo "file: ". htmlspecialchars( basename( $_FILES["courseupload"]["name"])). "file uploaded";
  } else {
    echo "sorry there is proplem and file did not uploaded";
    exit;
  }
}

include("../../template/connect.php");



$sql = "INSERT INTO course (filepath)
VALUES ('$target_file')";





if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



?>