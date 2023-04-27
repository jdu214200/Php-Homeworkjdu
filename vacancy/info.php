<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Xodim malumoti</h2>
    <?php
    $firstname = $_POST['ism'];
    $lastname = $_POST['familiya'];
    $birthday =$_POST['sana'];
    $gender =$_POST['jinsi'];
    $level =$_POST['daraja'];

    $image = $_FILES['rasm'];

    move_uploaded_file($image['tip_name'], "photo.jpg")

     echo "<p>Toliq isim: $firstname $lastname</p>";
     echo "<p>Tug'ilgan sanasi: $birthday</p>";
     echo "<p>Jinsi: $gender</p>";
     echo "<p>Darajasi: $level</p>";

     echo <img src="photo.jpg" width="100">;
    ?>
    
</body>
</html>