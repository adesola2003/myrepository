<?php

$servername = "localhost" ;
$username = "root";
$password = "";
$databasename = "kanyin";




//note the i in my sqli means improve




@$conn = new mysqli($servername, $username, $password, $databasename);

if($conn->connect_error){
    die('Connection failed'.$conn->connect_error. "");
}else{
       // echo "connection successful";
    $sql = "SELECT * FROM `student` WHERE 1";
    $rawdata = $conn->query($sql);
   // echo $rawdata;

    while($realdata = $rawdata->fetch_assoc()){

        print_r($realdata);
    echo "<br>";
    }


    /*
    echo $realdata['fullname'];
    echo "<br>";
    echo $realdata['matric'];
    echo "<br>";
    echo $realdata['phone'];
}
*/
}

?>