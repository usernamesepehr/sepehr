<?php


include("../../template/connect.php");

session_start();

$userid=$_SESSION['id'];

$sql = "SELECT courseid from boughtcourse where userid = '$userid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$sql = "SELECT * from course where id = '$row[id]'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "id:" . $row['id'];
echo "<br>"
echo "teacher name:" . $row['teachername'];
echo "<br>";
echo "coursetopic:" . $row['coursetopic'];
echo "<br>";
echo "price:" . $row['price'];
echo "<br>";
echo "<video width="700" height="400" controls>";
echo "<source src='" . $row['filepath'] . "'>";
echo "</video>";














?>