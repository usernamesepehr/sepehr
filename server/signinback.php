<?php

include("../template/connect.php");



$name = $_POST['name'];
$lastname = $_POST['lastname'];
$pasword = $_POST['password'];
$usernam = $_POST['username'];
$phone = $_POST['phone'];
$repeatpassword = $_POST['repeatpassword'];




$sql = "INSERT INTO user (name, lastname, password, username, phone, repeatpassword)
VALUES ('$name', '$lastname', '$pasword', '$usernam', '$phone', '$repeatpassword')";


session_start();

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:../panel/dashbord.html");
    
    $_SESSION["id"] = $row['id'];
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  header("location:../panel/dashbord.html");

?>