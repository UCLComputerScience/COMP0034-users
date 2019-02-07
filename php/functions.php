<?php
function isLoggedIn(){
    return isset($_SESSION['email']);
}

function requireLogIn(){
    if(!isLoggedIn()){
        header("Location: home.php");
    } else {
        //do nothing
    }
}

function logout(){
    unset($_SESSION['email']);
    header("Location: home.php");
    exit;
}