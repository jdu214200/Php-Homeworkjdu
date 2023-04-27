<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vacancy</title>
    <link rel="stylesheet" href="vacancy/info.php">
</head>
<body>
    <h1>Introduce yourself</h1>
    <form action="info.php" method="POST" enctype="multi">
            <input type="text" name="ism" placeholder="Ismi">
            <br></br>
            <input type="text" name="familiya" placeholder="Familiya">
            <br></br>
            <input type="date" name="sana">
            <br></br> 
            <input type="radio" name="jinsi" value="erkak">Erkak
             <input type="radio" name="jinsi" value="ayol">Ayol
             <br></br>
            <select name="daraja">
                
                <option value="junior">Junior</option>

                <option value="middle">Middle</option>
                <option value="senior">Senior</option>

            </select>
            <br></br>
            <input type="file" name="rasm">
            <br></br>
            
            <input type="submit" value="Jonatish">;

        </form>
</body>
</html>