<?php
require "db.php";

$skills = isset($_POST["skills"]) ? implode("|", $_POST["skills"]) : "";

$sql = "INSERT INTO users 
        (first_name, last_name, address, country, gender, skills, department) 
        VALUES (:first_name, :last_name, :address, :country, :gender, :skills, :department)";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ":first_name" => $_POST["first_name"],
    ":last_name" => $_POST["last_name"],
    ":address" => $_POST["address"],
    ":country" => $_POST["country"],
    ":gender" => $_POST["gender"],
    ":skills" => $skills,
    ":department" => $_POST["department"]
]);

header("Location: list.php");
exit;