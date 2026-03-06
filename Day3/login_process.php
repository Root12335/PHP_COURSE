<?php

session_start();

require "db.php";

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE username = :username";

$stmt = $conn->prepare($sql);

$stmt->execute([
":username" => $username
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user && $user["password"] == $password){

$_SESSION["username"] = $user["username"];
$_SESSION["user_id"] = $user["id"];

header("Location: home.php");
exit;

}else{

echo "Invalid username or password";

}