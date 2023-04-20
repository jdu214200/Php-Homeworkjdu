<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student info</title>
</head>
<body>
    <h1>Student Info</h1>

    <?php
    $fullname = $_GET['fullname'];
    $year = $_GET['year'];

    echo "<p>Fullname: $fullname</p>";
    echo "<p>Year: $year</p>";
    ?>

</body>
</html>