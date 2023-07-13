!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All prodcts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul></ul>
        <li><a href="index.php">All products</a></li>
        <li><a href="create.php">Create product</a></li>
    </ul>
    </nav>

    <?php 
    $id = $_GET['id'];
 
    
    $link = mysqli_connect("localhost", "root", "root", "amazonchik");
    $result = mysqli_query($link, "DELETE FROM products WHERE id = $id");

    echo "Product saved successfully";
    ?>
</body>
</html>