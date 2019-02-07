<?php
session_start();

if (isset($_POST['add'])) {
    $_SESSION["points"] += 2;
} else {
    if (isset($_POST['unset'])) {
        //Unset a session
        unset($_SESSION['points']);

        //Delete session
        session_destroy();
        session_regenerate_id(TRUE);   # flushes out session ID number
        session_start();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Sessions</title>
</head>
<body>
<div class="container-fluid">
    <p>
        <?php
        if (isset($_SESSION["points"])) {
            $points = $_SESSION["points"];
            echo("You've earned $points points.\n");
        } else {
            $_SESSION["points"] = 0;  # default
        }
        /*In PHP 7 the isset check is shortened to:
        $points = $_SESSION['points'] ?? 0; */

        ?>
    </p>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <button id="add" name="add">Add points</button>
    </form>

    <hr>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <button id="unset" name="unset">Unset</button>
    </form>

</div>
</body>
</html>

