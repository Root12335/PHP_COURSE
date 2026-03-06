<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add New User</h4>
        </div>

        <div class="card-body">
            <form action="save.php" method="post" enctype="multipart/form-data" >

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Country</label>
                    <select name="country" class="form-select" required>
                        <option value="">Select Country</option>
                        <option value="Egypt">Egypt</option>
                        <option value="USA">USA</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="male" required>
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="female">
                        <label class="form-check-label">Female</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Skills</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="PHP">
                        <label class="form-check-label">PHP</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="MySQL">
                        <label class="form-check-label">MySQL</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="JS">
                        <label class="form-check-label">JS</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <input type="text" name="department" class="form-control" required>
                </div>


                <div class="row">

                <div class="col-md-6 mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>

                </div>

                    <div class="mb-3">
                    <label class="form-label">Profile Picture</label>
                    <input type="file" name="image" class="form-control">
                    </div>


                <button type="submit" class="btn btn-success">Save User</button>
                <a href="list.php" class="btn btn-secondary">View Users</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>