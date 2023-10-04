<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Edit a Post</title>
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
  $query = "SELECT * FROM posts WHERE id = $id";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_assoc($result);
  $title = $row['title'];
  $body = $row['body'];
  ?>
  <h1>Edit the Post</h1>
  <form action="update.php" method="post">
    <input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title">
    <br>
    <textarea name="body" placeholder="Body"><?php echo $body; ?></textarea>
    <br>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" value="Update">
  </form>
</body>

</html>