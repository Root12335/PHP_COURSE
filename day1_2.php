<?php

$firstName = $_POST["first_name"];
$lastName  = $_POST["last_name"] ;
$address   = $_POST["address"];
$gender    = $_POST["gender"];
$skills    = $_POST["skills"] ;
$department = $_POST["department"];

$title = ($gender == "male") ? "Mr." : "Miss";

$skillsText = implode(", ", $skills);

?>

<!DOCTYPE html>
<html>

<body>

<h3>
Thanks (<?php echo $title; ?>) 
<?php echo $firstName . " " . $lastName; ?>
</h3>

<p>Please Review Your Information:</p>

<p><strong>Name:</strong> <?php echo $firstName . " " . $lastName; ?></p>

<p><strong>Address:</strong> <?php echo $address; ?></p>

<p><strong>Your Skills:</strong> <?php echo $skillsText; ?></p>

<p><strong>Department:</strong> <?php echo $department; ?></p>

</body>
</html>