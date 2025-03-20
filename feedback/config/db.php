<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'Ananias');
define('DB_PASS', 'GmanyeAnanias@1');
define('DB_NAME', 'feed_db');


// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check for connection errors
if($conn->connect_error){
    die('Connection Failed'.$conn->connect_error);
}

