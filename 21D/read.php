<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1em;
        }
        th,
        td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 0.5em;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e6f7ff;
        }
    </style>

</head>
<body>
    <!-- <h1>CRUD operation</h1>
    <form action="check.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="name">
        <br><br>
        <input type="password" name="password" placeholder="password"> 
        <br><br>
        <input type="file" name="image">
        <br><br>
        <input type="submit" value="Login">
    </form> -->

    <h1>Reading information</h1>
    <?php
    $users = json_decode(file_get_contents("db.json"), true);
   
    ?>
    <form action="create.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <br><br>
         <input type="password" name="password" placeholder="Password">
        <br><br>
         <input type="submit" value="Save">
         <br><br>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for($i=0; $i < sizeof($users); $i++) {
            echo "
                <tr>
                <td>{$users[$i]['id']}</td>
                <td>{$users[$i]['name']}</td>
                <td>{$users[$i]['password']}</td>
            </tr>
            ";
        }
            ?>
        </tbody>
    </table>

    </body>
</html>
