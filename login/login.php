<?php
require_once('initialise.php');

//Get the email and password values from the posted form

//Construct a query to select the hashed password for the user where it matches the email address entered

//Connect to the database and execute the query (initialise.php sets a global variable $connection which you can call using 'global $connection'

//If the user exists, check if the password entered matches the unhashed password from the database

//If the passwords match, set $_SESSION['email'] to the email address and return to index.php,
// otherwise advise the user that the passwords don't match

//If the user doesn't exist, advise the user that their details are not in the database
