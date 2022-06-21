<?php
  /*  $cookie_name = "user";
    $cookie_value = "oyin";
    setcookie($cookie_name, $cookie_value, time()-86400);


    echo "Cookie deleted and you are loged out";


    //header("Location: phpcookies.php")
*/

//topic: session
//subtoipc: to destroy and remove a session
session_start();

 session_unset();// to remove a session
    session_destroy(); // to destroy a session


header("Location: loginsession.php");

?>