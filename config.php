<?php
define('DB_SERVER', 'localhost:3309');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'registration');
 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
