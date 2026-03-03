<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>

<h2>Add User</h2>

<form action="save.php" method="post">

    <input type="text" name="first_name" placeholder="First Name" required><br><br>

    <input type="text" name="last_name" placeholder="Last Name" required><br><br>

    <textarea name="address" placeholder="Address" required></textarea><br><br>

    <select name="country" required>
        <option value="">Select Country</option>
        <option value="Egypt">Egypt</option>
        <option value="USA">USA</option>
    </select><br><br>

    Gender:
    <input type="radio" name="gender" value="male" required> Male
    <input type="radio" name="gender" value="female" required> Female
    <br><br>

    Skills:
    <input type="checkbox" name="skills[]" value="PHP"> PHP
    <input type="checkbox" name="skills[]" value="MySQL"> MySQL
    <input type="checkbox" name="skills[]" value="JS"> JS
    <br><br>

    <input type="text" name="department" placeholder="Department" required><br><br>

    <button type="submit">Save</button>

</form>

</body>
</html>