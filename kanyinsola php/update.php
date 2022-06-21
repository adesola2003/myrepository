<?php
require_once 'dbconn.php';
if(isset($_GET['userid']) && !empty($_GET['userid'])) {
    $userid = $_GET['userid'];

    $sql = "SELECT * FROM `student` WHERE  `user_id` = '$userid'";
    $user = $conn->query($sql);
    $userdata = $user->fetch_assoc();
    
    echo "<title>Welcome, ".$userdata['fullname']."</title>";
  //  echo "<h1>Welcome, ".$userdata['fullname']."</h1>";  
};

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update'])){
    if(!isset($_POST['fullname']) || empty($_POST['fullname'])){
        echo "<script>
        alert('fullname must be filled')
        window.history.back()
        </script>";
    }else{
        $newfname = $_POST['fullname'];
    }

    if(!isset($_POST['email']) || empty($_POST['email'])){
        echo "<script>
        alert('email must be filled')
        window.history.back()
        </script>";
    }else{
        $newemail = $_POST['email'];
    }


    if(!isset($_POST['newpassword']) || empty($_POST['newpassword'])){
        echo "<script>
        alert('newpassword must be filled')
        window.history.back()
        </script>";
    }else{
        $npassword = $_POST['newpassword'];
    }


    if(!isset($_POST['comfirmpassword']) || empty($_POST['comfirmpassword'])){
        echo "<script>
        alert('comfirmpassword must be filled')
        window.history.back()
        </script>";
    }else{
        $compass = $_POST['comfirmpassword'];
    }

    if($npassword != $compass){
        echo "<script>
        alert('comfirm password must be the same with new password')
        window.history.back()
        </script>";
    }else{
        $uid = $_POST['uid'];
        $newpass_hash = md5($npassword);
        $upd = "UPDATE `student` SET `fullname` = '$newfname', `email` = '$newemail', `password` = '$newpass_hash' WHERE `user_id` = '$uid'";


    }
    
    if($conn->query($upd)){
        header("Location: dabaseliginform.php");
    }
}
?>

<h1>Update user form</h1>
<form action="update.php" method="post">


fullname <input type="text" name="fullname" value="
<?php
echo $userdata['fullname'];
?>"> <br><br>


Email:<br><input type="text" name="email" value="<?php
echo $userdata['email'];
?>"><br><br>

<input type="hidden" name="uid" value="<?php
echo $userdata['user_id'];
?>"><br><br>
New Password:<br><input type="text" name="newpassword" value="<?php
echo $userdata['password'];
?>"><br><br>

confirmed password :<br><input type="text" name="comfirmpassword" value="<?php
echo $userdata['password'];
?>"><br><br>


    <input type="submit" value="update <?php
echo $userdata['fullname'];
?>" name="update">

</form>