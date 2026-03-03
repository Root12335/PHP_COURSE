<?php
require "db.php";

$stmt = $conn->query("SELECT * FROM users ORDER BY id");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Users List</h4>
            <a href="form.php" class="btn btn-success btn-sm">+ Add User</a>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped table-hover text-center align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Country</th>
                        <th>Gender</th>
                        <th>Skills</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user["id"] ?></td>
                        <td><?= $user["first_name"] . " " . $user["last_name"] ?></td>
                        <td><?= $user["address"] ?></td>
                        <td><?= $user["country"] ?></td>
                        <td>
                            <span class="badge bg-info text-dark">
                                <?= ucfirst($user["gender"]) ?>
                            </span>
                        </td>
                        <td><?= str_replace("|", ", ", $user["skills"]) ?></td>
                        <td><?= $user["department"] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $user["id"] ?>" 
                               class="btn btn-warning btn-sm">
                               Edit
                            </a>

                            <a href="delete.php?id=<?= $user["id"] ?>" 
                               class="btn btn-danger btn-sm">
                               Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>