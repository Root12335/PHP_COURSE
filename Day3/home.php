<?php

session_start();

if(!isset($_SESSION["username"])){

header("Location: login.php");
exit;

}

?>

<!DOCTYPE html>

<html>
<head>

<title>Home</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h3>

Welcome <?= $_SESSION["username"] ?>

</h3>

<a href="list.php" class="btn btn-success">
View Users
</a>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

</div>

</body>

</html>