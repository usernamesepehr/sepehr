<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>darkhast</title>
</head>
<body>
  <?php
session_start();

//import connect.php file

include("../../template/connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT * FROM course";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['techername'] . "</td>";
        echo "<td>" . $row['coursetopic'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td><img src=$row['path']""</td>";
        echo "<td><a href='registerCourse.php?id=" . $row['id'] . "'>buy</a></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

connclose();
?>
</body>
</html>