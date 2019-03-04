<?php
ob_start(); // output buffering is turned on
session_start(); // turn on sessions

require_once('functions.php');
require_once('dbConnection.php');

$connection = connectToDb();
