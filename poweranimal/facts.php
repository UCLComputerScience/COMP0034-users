<?php
require("animalfacts.php");
$animal = "";
$info = "";

session_start();
if (isset($_SESSION["animal"])) {
    $animal = $_SESSION["animal"];
    $info = getFact($animal);
} else {
    # redirect user to power animal page
    header("Location: poweranimal.php");
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Power Animal Finder - Animal Facts</title>
</head>

<body>
<div class="container-fluid">
    <h1>Power Animal - Animal Facts</h1>

    <p>
        Here are the facts about the <?= $animal ?>:
    </p>

    <p>
        <?= $info ?>
    </p>
</div>
</body>
</html>







