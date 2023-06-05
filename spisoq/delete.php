<?php

    $id = $_GET['id'];

    $students = json_decode(file_get_contents("data.json"),true);

    for($i = 0; $i < count($students); $i++) {
        if($students[$i]['id'] == $id) {
            array_splice($students, $i, 1);
        }
    }

    file_put_contents("data.json", json_encode($students));

    header("Location: index.php");

?>