<?php

function requireLogIn()
{
    if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        exit;
    }
}

function logout()
{
    // Unset all of the session variables.
    $_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

// Finally, destroy the session.
    session_destroy();

    header("Location: index.php");
    exit;
}

function getAccountDetails()
{
    $email = $_SESSION['email'];

    $query = "SELECT u.userid, firstname, lastname, number, street, city, postcode FROM user u JOIN address_user au on u.userid = au.userid JOIN address a on au.addressid = a.addressid WHERE u.email = '" . $email . "'";

    global $connection;

    $result = mysqli_query($connection, $query);

    $user = mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    echo "<h1>Account details</h1>";
    echo "<p>Name: " . $user['firstname'] . " " . $user['lastname'] . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Address: " . $user['number'] . " " . $user['street'] . ", " . $user['city'] . " " . $user['postcode'] . "</p>";
    exit;
}