<html>
  <head>
    <title>Delete a Post</title>
  </head>
  <body>
    <h3>Pick posts to delete:</h3>
    <form id='newPost' onsubmit="return formSubmit()" onmethod="post" action="deletePostsBack.php">
      <table>
        <tr>
          <th>Author</th>
          <th>Post</th>
          <th>Delete?</th>
        </tr>
        <?php
          $mysqli = new mysqli("mysql.eecs.ku.edu", "n191m459", "zoof7Eiy", "n191m459");
          $query = "SELECT * FROM posts";
          if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
              $userID = $row['author_id'];
              $content = $row['content'];
              $postID = $row['post_id'];
              echo "<tr>";
              echo "<td>$userID</td>";
              echo "<td>$content</td>";
              echo "<td><input type='checkbox' name='$postID'></td>";
              echo "</tr>";
            }
          }
          $mysqli->close();
        ?>
      </table>
      <input type='submit' value='Delete Posts'>
    </form>
  </body>
</html>
