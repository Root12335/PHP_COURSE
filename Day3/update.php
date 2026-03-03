<?php
require "db.php";

$skills = isset($_POST["skills"]) ? implode("|", $_POST["skills"]) : "";

$sql = "UPDATE users SET
        first_name = :first_name,
        last_name = :last_name,
        address = :address,
        country = :country,
        gender = :gender,
        skills = :skills,
        department = :department
        WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ":first_name" => $_POST["first_name"],
    ":last_name" => $_POST["last_name"],
    ":address" => $_POST["address"],
    ":country" => $_POST["country"],
    ":gender" => $_POST["gender"],
    ":skills" => $skills,
    ":department" => $_POST["department"],
    ":id" => $_POST["id"]
]);

header("Location: list.php");
exit;