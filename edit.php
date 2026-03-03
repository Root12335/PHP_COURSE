<?php

$id = $_GET["id"];
$rows = file("users.txt");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newRow =
        $_POST["first_name"].",".
        $_POST["last_name"].",".
        $_POST["address"].",".
        $_POST["country"].",".
        $_POST["gender"].",".
        str_replace(",", "|", $_POST["skills"]).PHP_EOL;

    $rows[$id] = $newRow;

    file_put_contents("users.txt", implode("", $rows));

    echo "User updated successfully <a href='list.php'>Go back to list</a>";
}


$data = explode(",", trim($rows[$id]));

?>

<h2>Edit User</h2>

<form method="post">

First Name:
<input type="text" name="first_name" value="<?php echo $data[0]; ?>"><br><br>

Last Name:
<input type="text" name="last_name" value="<?php echo $data[1]; ?>"><br><br>

Address:
<input type="text" name="address" value="<?php echo $data[2]; ?>"><br><br>

Country:
<input type="text" name="country" value="<?php echo $data[3]; ?>"><br><br>

Gender:
<input type="text" name="gender" value="<?php echo $data[4]; ?>"><br><br>

Skills (comma separated):
<input type="text" name="skills"
value="<?php echo str_replace("|", ",", $data[5]); ?>"><br><br>

<button type="submit">Save</button>

</form>