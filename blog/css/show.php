<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Show Post</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">All Post</a></li>
    </ul>
  </nav>
  <?php
  $id = $_GET['id'];
  $link = mysqli_connect("localhost", "root", "password", "blog");
  $query = "SELECT * FROM posts WHERE id = $id";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_assoc($result);
  echo "<section>";
  echo "<div>{$row['title']}</div>";
  echo "<div>{$row['body']}</div>";
  echo "<a href='edit.php?id=$id'>Edit Post</a>";
  echo "<a href='delete.php?id=$id'>Delete Post</a>";
  echo "</section>";
  ?>
</body>

</html>