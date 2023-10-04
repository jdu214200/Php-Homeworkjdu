<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Create a Post</title>
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">All Posts</a></li>
    </ul>
  </nav>
  <h1>Create a Post</h1>
  <form action="store.php" method="post">
    <input type="text" name="title" placeholder="Title">
    <br>
    <textarea name="body" placeholder="Body"></textarea>
    <br>
    <input type="submit" value="Add">
  </form>
</body>

</html>