<?php
function isLoggedIn(){
    return isset($_SESSION['email']);
}

function requireLogIn(){
    if(!isLoggedIn()){
        header("Location: index.php");
    } else {
        //do nothing
    }
}

function logout(){
    unset($_SESSION['email']);
    header("Location: index.php");
    exit;
}