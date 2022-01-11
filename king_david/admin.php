<?php 
if(isset($_POST['login'])){
$username = $_POST['uname'];
$password = $_POST['pass'];

if($username == "King David School" && $password == "kdsayodeledavid"){
    header("Location: post.php");
}else{
    echo '<script>alert("Check your login detail")</script';
}


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <style>
        button{
            width:130px;
            margin-top:10px;
            padding:10px;
    background-color:rgb(61, 79, 126);
    border:none;
    font-size:18px;
    border-radius:3px;
    color:white;
        }
    </style>
</head>
<body>
    
    <div class="login_container">
        <div class="school_img">
           <img src="uploads/admin/kdslogo.png" alt="King David Schools Logo">
        </div>
         <div class="login_containerItem">
         <form action="admin.php" method="post">
            <div class="form_container">
                <h1>KDS Administrative Area</h1>
                <hr>
                <input type="text" placeholder="Username" name="uname">
                <input type="password" placeholder="Password" name="pass">
    
  <button type="submit" name="login"> Access <i class="fa fa-sign-in" aria-hidden="true"></i> </button>
            </div>

        </form>

        </div>
        <div class="motor">
            <h4><span>Motto:</span>Accademic and Moral Excellence</h4>
            
        </div>

    </div>
    
    <script></script>
</body>
</html>