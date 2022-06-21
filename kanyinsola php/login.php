<!--<form action="index.php" method="get">
username:<br><input type="text" name="uname"><br><br>
Password:<br><input type="password" name="pass"><br><br>
<button type="submit">Login</button>
</form>-->

<?php 
if(isset($_POST['login'])){
$username = $_POST['uname'];
$password = $_POST['pass'];

if($username == "kanyinsola" && $password == "oyin"){
    header("Location: index.php");
}else{
    echo '<script>alert("Check your login detail")</script';
}
//echo "Welcome ".$username . " your password is ".$password;

}
session_start();
print_r($_SESSION)

?>

<form action="login.php" method="post">
    UserID:<br><input type="text" name="uname" value="<?php
    echo $_SESSION['userid']
    
    ?>" readonly><br><br>
username:<br><input type="text" name="uname" value="<?php
    echo $_SESSION['username']
    
    ?>" readonly><br><br>
Password:<br><input type="password" name="pass"><br><br>
<button type="submit" name="login">Login</button>

</form>