<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "n191m459", "zoof7Eiy", "n191m459");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $query = "SELECT user_id FROM users";
?>
  <h3>Users:</h3>
<?php
  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        printf($row['user_id']);
        print('<br>');
    }
  }
  $mysqli->close();
?>
