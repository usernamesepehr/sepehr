
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
        echo "<td>" . $row['id'] . "</td>" . '<br>';
        echo "<td>" . $row['teachername'] . "</td>" . '<br>';
        echo "<td>" . $row['coursetopic'] . "</td>" . '<br>';
        echo "<td>" . $row['prise'] . "</td>" . '<br>';
        echo "<td><a href='../../server/buy/register.php?id=" . $row['id'] . "'>buy</a></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}


?>
