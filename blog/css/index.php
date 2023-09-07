<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>All Posts</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav>
    <ul>
      <li><a href="create.php">Create a post</a></li>
    </ul>
  </nav>
  <h1>All Posts</h1>
  <?php

  $link = mysqli_connect("localhost", "root", "password", "blog");
  $query = "SELECT * FROM posts";
  $result = mysqli_query($link, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<section>";
    echo "<div>{$row['title']}</div>";
    echo "<div>{$row['body']}</div>";
    echo "<a href='show.php?id={$row['id']}'>Show Post</a>";
    echo "</section>";
  }
  ?>
</body>

</html>