<?php
include './conn.php';

    $query = "SELECT * FROM `feedback`";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["message"]. "<br>";
      }
    } else {
      echo "0 results";
    }


?>

