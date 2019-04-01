<?php
  $userID = $_GET['userIDToDisplay'];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "n191m459", "zoof7Eiy", "n191m459");
  $query = "SELECT content FROM posts WHERE (author_id = '$userID')";
  echo "<h3>Posts by user \"$userID\":</h3>";
  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
      print($row['content']);
      print("<hr>");
    }
  }
  $mysqli->close();
?>
