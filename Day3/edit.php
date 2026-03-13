<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require "db.php";

$id = $_GET["id"];

$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("User not found");
}

$userSkills = explode("|", $user["skills"]);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">
            <h4>Edit User</h4>
        </div>

        <div class="card-body">
            <form action="update.php" method="post">

                <input type="hidden" name="id" value="<?= $user["id"] ?>">

                <div class="mb-3">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control"
                           value="<?= $user["first_name"] ?>" required>
                </div>

                <div class="mb-3">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control"
                           value="<?= $user["last_name"] ?>" required>
                </div>

                <div class="mb-3">
                    <label>Address</label>
                    <textarea name="address" class="form-control" required><?= $user["address"] ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Country</label>
                    <select name="country" class="form-select" required>
                        <option <?= $user["country"]=="Egypt"?"selected":"" ?> value="Egypt">Egypt</option>
                        <option <?= $user["country"]=="USA"?"selected":"" ?> value="USA">USA</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="male"
                        <?= $user["gender"]=="male"?"checked":"" ?>> Male
                    <input type="radio" name="gender" value="female"
                        <?= $user["gender"]=="female"?"checked":"" ?>> Female
                </div>

                <div class="mb-3">
                    <label>Skills</label><br>
                    <input type="checkbox" name="skills[]" value="PHP"
                        <?= in_array("PHP",$userSkills)?"checked":"" ?>> PHP
                    <input type="checkbox" name="skills[]" value="MySQL"
                        <?= in_array("MySQL",$userSkills)?"checked":"" ?>> MySQL
                    <input type="checkbox" name="skills[]" value="JS"
                        <?= in_array("JS",$userSkills)?"checked":"" ?>> JS
                </div>

                <div class="mb-3">
                    <label>Department</label>
                    <input type="text" name="department" class="form-control"
                           value="<?= $user["department"] ?>" required>
                </div>

                <button class="btn btn-success">Update</button>
                <a href="list.php" class="btn btn-secondary">Back</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>