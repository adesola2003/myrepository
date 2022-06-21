<?php
require_once 'dbconn.php';
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $userid = $_GET['id'];

    $sql = "SELECT * FROM `student` WHERE  `user_id` = '$userid'";
    $user = $conn->query($sql);
    $userdata = $user->fetch_assoc();
    
    echo "<title>Welcome, ".$userdata['fullname']."</title>";
    echo "<h1>Welcome, ".$userdata['fullname']."</h1>";


    echo "<a href='update.php?userid=".$userdata['user_id']."'>update, ".$userdata['fullname']."</a>";

    echo "<br>";
    
    echo "<a href='delete.php?userid=".$userdata['user_id']."'>delete, ".$userdata['fullname']."</a>";
}
?>
 
 