<?php
require_once('dbConnection.php');

$email = '';
$password = '';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

//Check if the user exists
$query = "SELECT password FROM user WHERE email = '" . $email . "'";

$connection = connectToDb();

$result = mysqli_query($connection, $query);

$user = mysqli_fetch_assoc($result);
mysqli_free_result($result);
closeDb($connection);



if ($user) {
    if (password_verify($password, $user['password'])) {
        //login
        session_regenerate_id();
        $_SESSION['email'] = $email;
        header("Location: ../home.php");
    } else {
        echo "Password didn't match";
    }
} else {
    echo "No account for this email";
}