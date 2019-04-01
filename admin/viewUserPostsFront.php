<html>
  <head>
    <title>View User Posts</title>
  </head>
  <body>
    <h3>Select a User</h3>
    <form id='viewUserPosts' onmethod="post" action="viewUserPostsBack.php">
      <select name='userIDToDisplay' required>
        <?php
          $mysqli = new mysqli("mysql.eecs.ku.edu", "n191m459", "zoof7Eiy", "n191m459");
          $query = "SELECT user_id FROM users";
          if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
              $userID = $row['user_id'];
              print("<option value='$userID'>$userID</option>");
            }
          }
          $mysqli->close();
        ?>
      </select>
      <input type='submit' value='submit'>
    </form>
  </body>
</html>
