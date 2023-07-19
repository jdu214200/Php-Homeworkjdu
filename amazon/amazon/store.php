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
    <?php
        $name = $_POST['name'];
        $price = $_POST['price'];

        $link = mysqli_connect("localhost", "root", "root", "amazon");
        $result = mysqli_query($link, "INSERT INTO products (name, price) VALUES('$name', '$price')");
       
        echo "Product saved successfully";
    ?>
</body>
</html>