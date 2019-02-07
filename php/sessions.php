<?php
session_start();

/*
$_SESSION["name"] = value;       # store session data
$variable = $_SESSION["name"];   # read session data
if (isset($_SESSION["name"])) {  # check for session data
*/

if (isset($_SESSION["points"])) {
    $points = $_SESSION["points"];
    print("You've earned $points points.\n");
} else {
    $_SESSION["points"] = 0;  # default
}
//In PHP 7 this is shortened to:
$points = $_SESSION['points'] ?? 0;

//Unset a session
unset($_SESSION['points']);


//Delete session
session_destroy();
session_regenerate_id(TRUE);   # flushes out session ID
numbersession_start();

