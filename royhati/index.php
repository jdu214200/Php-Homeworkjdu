<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>全部学生</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
  <?php
     $students = json_decode(file_get_contents("data.json"), true);

    for($i = 0; $i < count($students); $i++)
    {
        echo "
          <tr>
              <td>1</td>
              <td>{$students[$i]['firstname']}</td>
              <td>{$students[$i]['lastname']}</td>
             <td></td>
         </tr> 
         ";
    }
     file_put_contents("data.json", "json_encode"($students));
  ?>
    
</table>

</body>
</html>
