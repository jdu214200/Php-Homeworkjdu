<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Barcha talabalar royhati</h1>
    <?php
    echo  "<pre>";
    echo file_get_contents("data.txt");
    echo "</pre>";
    ?>
</body>
</html>
