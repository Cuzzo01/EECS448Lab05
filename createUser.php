<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "n191m459", "zoof7Eiy", "n191m459");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $userID = $_GET['userID'];
  $query = "INSERT INTO users VALUES ('$userID');";

  if (!$mysqli->query($query)) {
    printf("Error adding user, userID already used.");
  } else {
    printf("Added user successfully");
  }

  $mysqli->close();
?>
