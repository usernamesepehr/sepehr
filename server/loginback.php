<?php

include("../template/connect.php");



session_start();

$phone = $_POST['phone'];
$pasword = $_POST['password'];

$sql = "SELECT id FROM user Where phone = '$phone' and password = '$pasword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $_SESSION["id"] = $row['id'];
     
    header("Location:../panel/dashbord.html");
    
} else {
    echo "0 results";
}

$conn->close();
?>
