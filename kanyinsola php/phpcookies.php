<?php 
/*  if(isset($_COOKIE['$cookie_name'])){
    echo'Welcome you are in';

}else{
  //  setcookie($cookie_name, $cookie_value, time()+86400 );
    echo '
    
    <form action="" method="post">
  Username: <input type="text" name="username"><br><br>
   Password: <input type="password" name="password"><br><br>
    
    <button type="submit" name="log">Login</button>
    
    </form>
    
    ';
}
 */
/*
//subtopic:to delete a cookie
if(isset($_COOKIE['user'])){
  echo'Welcome you are in <hr>';
  echo "<br>";

  echo '<a href="logout.php">Logout</a>';
}else{
  $cookie_name = "user";
  $cookie_value = "oyin";
  setcookie($cookie_name, $cookie_value, time()+86400 );
 

  echo "Cookie created";
}
*/
////subtopic:to know if user allowed cookie on their system

if(count($_COOKIE) > 0){
  echo'Cookie Enable';
  
}else{

  echo "Pls Enable cookie to register";
}




 /*$cookie_name ="userid";
    $cookie_value = time();

    setcookie($cookie_name, $cookie_value, time()+86400 );*/
/*
    if(isset($_POST['log'])){
        $cookie_name = $_POST['username'];
    $cookie_value = $_POST['password'];
    setcookie($cookie_name, $cookie_value, time()+86400 );
    }
*/
   /* $cookie_name ="userid";
    //$cookie_value = 35565765745;
    $cookie_value = time();*/
   ?>