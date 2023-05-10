<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    $password = $_POST['password'];
    $image = $_FILES['image'];


    move_uploaded_file($image['tmp_name'], 'images/' .$name. "JPG");
    echo "<p>Name"
        <?php
    $name = $_POST['name'];
    $password = $_POST['password'];
    $image = $_FILES['image'];


    move_uploaded_file($image['tmp_name'], 'images/' .$name. "JPG");
    echo "<p>Name"
</body>
</html>
