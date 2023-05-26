<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        a{
            text-decoration: none;g
        }
    </style>
</head>
<body>
    <h1>All students</h1>
    <a href="create.php">Add new student</a><br><br>

    <table id="customers">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Action</th>
        </tr>
        <?php
            $students = json_decode(file_get_contents("data.json"), true);
            

            for($i = 0; $i < count($students); $i++) 
            {
                echo "
                    <tr>
                        <td>{$students[$i]['id']}</td>
                        <td>{$students[$i]['firstname']}</td>
                        <td>{$students[$i]['lastname']}</td>
                        <td>
                            <a href='edit.php>💊</a>
                            <a href='delete.php?id={$students[$i]['id']}'>❌</a>
                        </td>
                    </tr>
                ";
            }
        ?>
        
    </table>
</body>
</html>