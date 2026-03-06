    <?php
    require "db.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $imagePath = "";

    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){

    $allowed = ["image/jpeg","image/png"];

    if(in_array($_FILES["image"]["type"],$allowed)){

    $imagePath = "uploads/" . time() . "_" . $_FILES["image"]["name"];

    move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);

    }

    }



    $skills = isset($_POST["skills"]) ? implode("|", $_POST["skills"]) : "";

    $sql = "INSERT INTO users 
    (first_name,last_name,address,country,gender,skills,department,username,password,image)

    VALUES
    (:first_name,:last_name,:address,:country,:gender,:skills,:department,:username,:password,:image)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([

    ":first_name" => $_POST["first_name"],
    ":last_name" => $_POST["last_name"],
    ":address" => $_POST["address"],
    ":country" => $_POST["country"],
    ":gender" => $_POST["gender"],
    ":skills" => $skills,
    ":department" => $_POST["department"],
    ":username" => $username,
    ":password" => $password,
    ":image" => $imagePath

    ]);

    header("Location: list.php");
    exit;