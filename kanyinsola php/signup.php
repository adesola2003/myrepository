<?php
// to knuw how to apply isset
/*if($_SERVER['REQUEST_METHOD']== 'POST' {
   // echo "REGISTRATION BUTTON WAS CLICKED";
 // if (isset($_POST['uname'])){
  //    echo "you name is" . $_POST['uname'];
 // }else{
  //    echo'username is required';
  //}}*/

  //to apply seclecting a submit button
/*  if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['reg']) ){
  // if(empty($_POST['uname'])){
      //!empty using not (!) eg !empty, !isset
    if(!empty($_POST['uname'])){
            echo'username is required and cannot be empty';
    }
}
*/

require_once 'dbconn.php';



//mixing js with php and to get back where you started
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['reg']) ){

    if(empty($_POST['uname'])){
        echo"
        <script>
        alert('Username must be filled')
        window.history.back()
        </script>
         "; 
    }elseif(!preg_match("/^[a-zA-Z-' ]*$/", $_POST['uname'])){
        echo'
        <script>
        alert("Character only is allowed")
        window.history.back()
        </script>
         '; 
}else{
    //uname means fullname in the datbase
   $uname = cleanData($_POST['uname']);
 //  echo "<script> alert ('$uname') </script>";
    echo '<span >' .$uname.'</span>';
};

if(empty($_POST['email'])){

    echo"
    <script>
    alert('Email must be filled')
    window.history.back()
    </script>
     "; 

}else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo'
        <script>
        alert("Please enter an email format")
        window.history.back()
        </script>
         '; 
}else{
    
    $email = cleanData($_POST['email']);
    echo "<script> alert ('$email') </script>";
     echo '<span >' .$email.'</span>';
 };


 if(empty($_POST['phone'])){

    echo"
    <script>
    alert('password must be filled')
    window.history.back()
    </script>
     "; 

}elseif(!preg_match("/^[0-9 + ]*$/", $_POST['phone'])){
        echo'
        <script>
        alert("Please enter proper password format")
        window.history.back()
        </script>
         '; 
}else{
    
    $phone = $_POST['phone'];
   
 };
 
 
 if(empty($_POST['pass'])){

    echo"
    <script>
    alert('password must be filled')
    window.history.back()
    </script>
     "; 

}else{
    $pass=md5($_POST['pass']);
};
if(isset($_POST['gender'])){
   $gender= $_POST['gender'];
};
if(!empty($_POST['marital_status'])){
    $maritalstatus= $_POST['marital_status'];
}else{
    $maritalstatus = "others";
}
$t = time();
$matric = substr($uname,0,3).substr($t,0,5);
$sele = "SELECT `user_id` FROM `student` Where `matric` = '$matric' OR `phoneno` = '$phone' OR `email` = '$email'";
    $rele_sele = $conn->query($sele);
    if($rele_sele->num_rows > 0){

        echo "User with either $matric, $phone, $email already exsist";
    }else{
$ins ="INSERT INTO `student`(`matric`, `fullname`, `phoneno`, `email`, `password`,`gender`,`marital_status`) VALUES ('$matric','$uname','$phone','$email','$pass','$gender','$maritalstatus')";

if($conn->query($ins)){
    echo "registered sucessfully";
}else{
    echo $conn->error;
    
}

}
};
function cleanData($data){
    $data = trim($data); //trim is to remove extra space at the beginning  and end of the file
    $data = stripslashes($data); //to take backslash away form a word
    $data = htmlspecialchars($data);//to kick out hackers and to keep website safe so it changes when a user input special html characters it  makes it useless
    $data = filter_var($data, FILTER_SANITIZE_STRING);

    return $data;

}

    
 


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration</h1>
<form action="signup.php" method="post">
username:<br><input type="text" name="uname" id="username"><br><br>
Email: <br> <input type="email" name="email"><br><br>
phoneno: <br> <input type="number" name="phone"><br><br>
Password:<br><input type="password" name="pass"><br><br>
Gender : <b>  <input type="radio" name="gender" value="male"> Male
             <input type="radio" name="gender" value="female"> Female
             <input type="radio" name="gender" value="others"> Others<br><br>
             Marital status:<br><br>
             <select name="marital_staus">
                 <option value=""> select your marital status</option>
                 <option value="married">Married</option>
                 <option value="single">Single</option>
                 <option value="others">others</option>
</select>
<button type="submit" name="reg">Register</button>
<button type="submit" name="log">login</button>
</form>

    <div>
        <span>Reply</span>
    <div style="background-color:lightgreen;padding:10px 15px;">


    <?php
    
    if (isset($uname)){
        echo "Username: $uname";
    };
    echo "<br>";
    if (isset($email)){
        echo "Email: $email";
    };
    
    ?>

     </div>
    </div>
</body>
</html>