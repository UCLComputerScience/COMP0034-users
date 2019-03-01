<?php
require("dbConnection.php");

//Note there is no validation applied!
$firstname = $_POST['firstname1'];
$lastname = $_POST['lastname1'];
$email = $_POST['email1'];

//Hash the password
$password = password_hash($_POST['password1'], PASSWORD_DEFAULT);

//Check if the user exists
$query = "SELECT userid FROM user WHERE email = '" .$email ."' LIMIT 1";

$connection = connectToDb();
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) == 1) {
    echo "An account already exists for this email address";
    mysqli_free_result($result);
} else {

    $qryAdd = "INSERT INTO user (firstname, lastname, email, password) VALUES ('" . $firstname . "', '" . $lastname . "', '" . $email . "', '" . $password . "')";
    echo $qryAdd;
    $result = mysqli_query($connection, $qryAdd);
    if (!$result) {
        closeDb($connection);
        echo "Database error: " . mysqli_error($connection);
        exit;
    }
    closeDb($connection);
    header("Location: index.php");
    exit;
}
