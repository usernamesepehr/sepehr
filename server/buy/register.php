<?php


include("../../template/connect.php");

session_start();

$userid=$_SESSION['id'];
$courseid=$_GET['id'];

$date = date("Y/m/d");


$sql = "INSERT INTO boughtcourse (userid, courseid, date)
VALUES ('$userid', '$userid', '$date')";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  header("location:showcourse.php");


?>