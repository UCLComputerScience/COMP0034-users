<?php require_once('initialise.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>My account</title>
</head>
<body>
<?php
include('navbar.php');?>
<main role="main" class="container">
<?php
    requireLogIn();
    getAccountDetails();
    ?>
</main>

</body>
</html>