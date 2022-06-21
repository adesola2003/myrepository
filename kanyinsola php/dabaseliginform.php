<?php 
session_start();
require_once 'dbconn.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pword = md5($_POST['pass']);

    $sql = "SELECT * FROM `student` WHERE  `email` = '$email' AND `password` = '$pword'";
    $user = $conn->query($sql);

    if($user->num_rows < 1){
        echo"no user with such details";
    }else{
        $userrow = $user->fetch_assoc();
        header("Location: dashboard.php?id=".$userrow['user_id']);
        echo "hi, " .$userrow['fullname']."welcome to our website";
    }
}

?>

<form action="dabaseliginform.php" method="post">

    
    
    Email:<br><input type="text" name="email"><br><br>
Password:<br><input type="password" name="pass"><br><br>
<button type="submit" name="login">Login</button>

</form>