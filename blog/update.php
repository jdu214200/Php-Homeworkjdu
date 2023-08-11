<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Update the Post</title>
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">All Posts</a></li>
    </ul>
  </nav>
  <?php
  $id = $_POST['id'];
  $title = $_POST['title'];
  $body = $_POST['body'];

  $link = mysqli_connect("localhost", "root", "password", "blog");
  $query = "UPDATE posts SET title = '$title', body = '$body' WHERE id = $id";
  $result = mysqli_query($link, $query);

  if (mysqli_errno($link)) {
    echo "Error: " . mysqli_error($link);
  } else {
    echo "Post updated successfully!";
  }
  ?>
</body>

</html>