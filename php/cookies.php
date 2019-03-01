<?php

if ($_POST["type"] == 1){
    setCookies();
} else {
    readCookies();
}

function setCookies(){
    $username = $_POST['username'];
    $password = $_POST['password'];
    setcookie("username", $username);
    setcookie("password", $password);
    header('Location: ../cookies_php.html');
    exit;
}

function readCookies(){
    if (isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
        print("Welcome, $username.");
        print(PHP_EOL);
    } else {
        print("Never heard of you.\n");
    }
    print("All cookies received:\n");
    print_r($_COOKIE);
}