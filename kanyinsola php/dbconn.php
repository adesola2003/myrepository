<?php
$servername = "localhost" ;
$username = "root";
$password = "";
$databasename = "kanyin";

@$conn = new mysqli($servername,$username, $password, $databasename);

if($conn->connect_error){
    die("Connection failed ".$conn->connect_error . "");
}
/*else{
$sql = "SELECT * FROM `student` WHERE 1";
$rawdata = $conn->query($sql);



while($realdata = $rawdata->fetch_assoc()){

      print_r($realdata); 
      echo "<br>";


}


//



}*/


?>