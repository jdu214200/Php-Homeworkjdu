<?php
    $firstname = $_GET['f'];
    $lastname = $_GET['l'];

    $students = json_decode(file_get_contents("data.json"), true);

    $newStudent = [
        "id" => count($students) + 1,
        "firstname" => $firstname,
        "lastname" => $lastname
    ];

    $students[] = $newStudent;

    file_put_contents("data.json", json_encode($students));

    header("Location: index.php");

?>