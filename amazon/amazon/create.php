<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">All products</a></li>
            <li><a href="create.php">Create product</a></li>
        </ul>
    </nav>
    <form action="store.php" method="post">
        <input type="text" name="name" placeholder="Product name"><br><br>
        <input type="number" name="price" placeholder="Product price"><br><br>
        <button>Save product</button>
    </form>
</body>
</html>