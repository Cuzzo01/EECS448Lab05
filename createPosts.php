<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "n191m459", "zoof7Eiy", "n191m459");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $userID = $_GET['userID'];
  $postContent = $_GET['postContent'];
  $query = "SELECT user_id FROM users WHERE (user_id = '$userID')";

  if ($result = $mysqli->query($query)) {
    $query = "INSERT INTO posts (content, author_id) VALUES ('$postContent', '$userID');";
    if ($mysqli->query($query)) {
      print("Post saved successfully.");
    } else {
      print("Error: Unknown error saving post.");
    }
  } else {
    print("Error: User not found");
  }

  $mysqli->close();
?>
