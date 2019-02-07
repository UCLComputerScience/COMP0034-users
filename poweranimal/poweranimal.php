<?php
# CSE 190M, Spring 2012
# This page demonstrates the use of sessions to temporarily remember
# each user's "power animal" and number of visits.
session_start();

if (isset($_GET["erase"]) && $_GET["erase"] == "on") {
    # wipe out my session
    session_destroy();
    session_regenerate_id(TRUE);   # flushes out session ID number
    session_start();
}

if (!isset($_SESSION["animal"])) {
    # user's first visit; create and set up session data
    $animals = array("bee", "llama", "octopus", "rabbit", "squirrel", "yak");
    $power_animal = $animals[rand(0, count($animals) - 1)];
    $_SESSION["animal"] = $power_animal;
    $_SESSION["visits"] = 1;
    $visits = 1;
} else {
    # user has visited this site before; re-use their animal
    $power_animal = $_SESSION["animal"];
    $visits = $_SESSION["visits"];
    $visits++;
    $_SESSION["visits"] = $visits;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Power Animal Finder - Find your power animal!</title>
</head>
<body>
<div class="container-fluid">
    <h1>Power Animal Finder</h1>

    <?php if ($visits == 1) { ?>
        <p>Welcome to our site, new visitor!</p>
    <?php } else { ?>
        <p>Welcome back! This is your visit #<?= $visits ?>.</p>
    <?php } ?>

    <p>Your power animal is the <?= $power_animal ?>!</p>

    <p><img src="img/<?= $power_animal ?>.png" alt="power animal"/></p>

    <p><a href="facts.php" ?>Facts about your animal</a></p>

    <form action="poweranimal.php">
        <div><input type="submit" value="Reload"/></div>
        <div><label><input type="checkbox" name="erase"/> Start over?</label></div>
    </form>
</div>
</body>
</html>