<?php
session_start();  // starting a session  

$_SESSION['userid'] = time(); //creating a session
$_SESSION['username'] = "Fastrack"; //creating a session

echo '<a href="logout.php">LOGOUT</a>';

?>