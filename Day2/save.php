<?php

$data = [
    $_POST["first_name"],
    $_POST["last_name"],
    $_POST["address"],
    $_POST["country"],
    $_POST["gender"],
    implode("|", $_POST["skills"]),
    $_POST["department"]
];

$line = implode(",", $data) . PHP_EOL;

file_put_contents("users.txt", $line, FILE_APPEND);

header("Location: list.php");
exit;