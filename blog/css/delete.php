<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Delete the Post</title>
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">All Posts</a></li>
    </ul>
  </nav>
  <?php
  $id = $_GET['id'];
  $link = mysqli_connect("localhost", "root", "password", "blog");
  $query = "DELETE FROM posts WHERE id = $id";
  mysqli_query($link, $query);
  if (mysqli_errno($link)) {
    echo "Error: " . mysqli_error($link);
  } else {
    echo "Post deleted successfully!";
  }
  ?>
</body>

</html>