<?php
session_start();
if (isset($_POST['login'])){
$_SESSION['userid'] = $_POST['uid'];//creating a session
$_SESSION['username'] = $_POST['uname']; //creating a session
$_SESSION['password'] = $_POST['pass']; //creating a session

header("Location: index.php");
}

?>

<form action="" method="post">
    UserID:<br><input type="text" name="uid" value="<?php
   echo time()
    
    ?>" readonly><br><br>
username:<br><input type="text" name="uname" ><br><br>
Password:<br><input type="password" name="pass"><br><br>
<button type="submit" name="login">Login</button>

</form>