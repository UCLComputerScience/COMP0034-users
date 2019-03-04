<?php
require_once('initialise.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Home / Login</title>
</head>
<body>
<?php include("navbar.php"); ?>
<main role="main" class="container">
    <form class="form" action="login.php" method="post">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" required><br>
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required><br>
            <label><input class="checkbox" type="checkbox" name="rme"> Remember me</label><br>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
    <hr>
    <form action="adduser.php" method="post">
        <input type="submit" name="someAction" value="Create a test account" />
    </form>
</main>
</body>
</html>