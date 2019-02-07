<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>My account</title>
</head>
<body>
<?php
include('php/functions.php');
requireLogIn();
include('navbar.php');?>
<main role="main" class="container">

    <?php echo $_SESSION['email']?>
</main>

</body>
</html>