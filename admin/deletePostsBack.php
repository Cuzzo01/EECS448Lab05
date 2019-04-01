<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "n191m459", "zoof7Eiy", "n191m459");
  foreach ($_GET as $postID => $alwaysON) {
    $query = "DELETE FROM posts WHERE post_id='$postID'";
    $mysqli->query($query);
  }
  print("Posts deleted successfully.");
 ?>
