<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Add user</title>
</head>
<body>
<?php include("navbar.php"); ?>
<main role="main" class="container">
    <h5>Create a new user for testing</h5>
    <form class="form" action="newaccount.php" method="post">
        <div class="form-group">
            <label for="firstname1">First name:</label>
            <input type="text" class="form-control" id="firstname1" name="firstname1" required>
            <label for="lastname1">Last name:</label>
            <input type="text" class="form-control" id="lastname1" name="lastname1" required><br>
            <label for="email1">Email address:</label>
            <input type="email" class="form-control" id="email1" name="email1" required>
            <label for="password1">Password:</label>
            <input type="password" class="form-control" id="password1" name="password1" required><br>
        </div>
        <button type="submit" class="btn btn-dark">Create new account</button>
    </form>
</main>
</body>
</html>