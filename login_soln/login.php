<?php
require_once('initialise.php');

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$query = "SELECT password FROM user WHERE email = '" . $email . "'";

global $connection;

$result = mysqli_query($connection, $query);

$user = mysqli_fetch_assoc($result);

mysqli_free_result($result);

if ($user) {
    if (password_verify($password, $user['password'])) {
        // session_regenerate_id();
        $_SESSION['email'] = $email;
        header("Location: success.php");
    } else {
        echo "Password didn't match";
    }
} else {
    echo "No account found for this email";
}