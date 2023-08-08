<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Store a Post</title>
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">All Posts</a></li>
    </ul>
  </nav>
  <?php
  $title = $_POST['title'];
  $body = $_POST['body'];

  $link = mysqli_connect("localhost", "root", "password", "blog");
  $query = "INSERT INTO posts VALUES ('$title', '$body', NULL)";
  $result = mysqli_query($link, $query);

  if (mysqli_errno($link)) {
    echo "Error: " . mysqli_error($link);
  } else {
    echo "Post stored successfully!";
  }
  ?>
</body>

</html>