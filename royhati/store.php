<?php
    $firstname = $_GET['f'];
    $lastname = $_GET['l'];

    $students = json_decode(file_get_contents("data.json"), true);
   
    $newStudents = [
        "id" => count($students) + 1,
        "firstname" => $firstname,
        "lastname" => $lastname
    ];
   
    $students[] = $newStudents;

    echo "<pre>";
    var_dump($students);
    echo "</pre>";

    file_put_contents("data.json", "json_encode"($students));
?>
