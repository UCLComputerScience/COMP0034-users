<?php
function requireLogin(){
    if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        exit;
    }
}