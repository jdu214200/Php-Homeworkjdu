<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <form action="store.php">
        <input type="text" name="name" placeholder="Product name">
        <input type="number" name="price" placeholder="Product price">
        <button type="submit">Save</button>
    </form>
     <?php
    $link = mysqli_connect("localhost", "root", "root", "fastfood");

    $result = mysqli_query($link, "SELECT * FROM products ");

   while ($row = mysqli_fetch_assoc($result))
   {
    echo $row['id'] . " " . $row['name'] . " " . $row['price'] . "<br/>";
   }
    

    
     ?>
</body>
</html>


