<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'kingdavid';

$conn = new MySQLi($servername, $username, $password, $dbname);

if($conn->connect_error){
    //die("Connection failed:". $conn->connect_error)
}else{
//echo "Connection Successful";
}


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sub'])){
    $sname = $_POST['sname'];
    $oname = $_POST['oname'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $addr = $_POST['addr'];
    $dob = $_POST['dob'];
  
    $sql = "INSERT INTO `king_david`( `sname`, `oname`, `gender`, `dob`, `state`, `phone`, `addr`) VALUES ('$sname', '$oname', '$gender', '$dob', '$state', '$phone', '$addr')";

    if($conn->query($sql)){
        echo 
        '<script>
            alert("Thanks, your application has been submitted")
            window.location="home.html"
        </script>';
    }else{//$conn->error();
    }

}
$conn->close();
?>
