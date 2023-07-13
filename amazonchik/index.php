<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All products</title>
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
        $link = mysqli_connect("localhost", "root", "root", "amazonchik");
        $result = mysqli_query($link, "SELECT * FROM products");
        $count = mysqli_query($link, "SELECT COUNT(*) as  count FROM products;");

        $count =  mysqli_fetch_assoc($count);
        echo " <h3>Count of products: {$count['count']}</h3>";
 
        while($row = mysqli_fetch_assoc($result)) {
            echo "
                <div class='product'>
                    <p><b>{$row["name"]}</b></p>
                    <p><i>$ {$row["price"]}</i></p>
                    <a class='btn' href='delete.php?id={$row["id"]}'>Delete</a>
                    <a class='btn' href='delete.php?id={$row["id"]}'>Edit</a>
                 </div>
            ";
        }
   ?>

   
</body>
</html>