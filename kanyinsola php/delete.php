<?php
require_once 'dbconn.php';
if(isset($_GET['userid']) && !empty($_GET['userid'])) {
    $userid = $_GET['userid'];

    $sql = "DELETE  FROM `student` WHERE  `user_id` = '$userid'";
   
    if($conn->query($sql)){
    echo "<script>
    alert('a row deleted')
    window.history.back()
    </script>";
    };
}
?>