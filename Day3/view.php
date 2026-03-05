<?php
require "db.php";

if (!isset($_GET["id"])) {
    die("Invalid request");
}

$id = $_GET["id"];

$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("User not found");
}

$skills = str_replace("|", ", ", $user["skills"]);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">User Details</h5>
        </div>

        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="fw-bold">First Name</label>
                    <div class="form-control"><?= $user["first_name"] ?></div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Last Name</label>
                    <div class="form-control"><?= $user["last_name"] ?></div>
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Address</label>
                <div class="form-control"><?= $user["address"] ?></div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="fw-bold">Country</label>
                    <div class="form-control"><?= $user["country"] ?></div>
                </div>

                <div class="col-md-4">
                    <label class="fw-bold">Gender</label>
                    <div class="form-control"><?= ucfirst($user["gender"]) ?></div>
                </div>

                <div class="col-md-4">
                    <label class="fw-bold">Department</label>
                    <div class="form-control"><?= $user["department"] ?></div>
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Skills</label>
                <div class="form-control"><?= $skills ?></div>
            </div>

            <a href="list.php" class="btn btn-secondary">Back</a>
            <a href="edit.php?id=<?= $user["id"] ?>" class="btn btn-warning">Edit</a>

        </div>
    </div>
</div>

</body>
</html>