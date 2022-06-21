<?php
require_once 'dbconn.php';

    $sql = "SELECT * FROM `student` WHERE `user_id` = '4'  ORDER BY `user_id` DESC"; //note the defult is ascending order (ASC)
    $user = $conn->query($sql);
  while($userdata = $user->fetch_assoc()){
    echo "<a href='update.php?userid=".$userdata['user_id']."'>update, ".$userdata['fullname'].$userdata['user_id']."</a><br><br>";
  };
    
  
  
?>
 