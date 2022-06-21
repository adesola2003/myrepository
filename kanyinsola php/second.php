<!DOCTYPE html>
<html>
    <head>
        <title>oyin is a girl</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
    
        <meta name="Author"content="ADEX Computer Technologies">
        <meta http-equiv="refresh" content="">
       
 </head>



 <?php 
if(isset($_POST['login'])){
$username = $_POST['surname'];
$password = $_POST['pword'];

if($username == "kanyinsola" && $password == "oyin"){
    header("Location: second2.php");
}else{
    echo '<script>alert("Check your login detail")</script';
}
echo "Welcome ".$username . " your password is ".$password;

}

?>
    <body>

    <br><br><br><br><br>
      <div class="container p-5 main" name="begin" id="mai">
        <form  action="second2.php" method="post">
        <fieldset>
            <h1 class="reg">REGISTRATION FORM</h1>
            <legend> <strong></strong></legend>
        Surname:<br> <input id="name" type="text" placeholder="Enter your surname"size="50" maxlength="100" name="surname" required><br>Only capitals allowed<br><br>
        Firstname:<br> <input id="two" type="text" placeholder="Enter your Firstname"size="50" maxlength="100" pattern="[A-Za-z0-9.$#]{10}" name="fname" required><br>Only capitals allowed<br><br>
        Other name:<br> <input id="three" type="text" placeholder="Enter your other name"size="50" maxlength="100" pattern="[A-Za-z0-9.$#]{10}" name="oname" required><br>Only capitals allowed<br><br>
        Date of Birth: <br> <input id="four" type="date" name="dob" required><br><br>
        E.mail:<br> <input id="five" type="e.mail" size="50" maxlength="100" name="email" required> <br><br>
        Status: <br> Married <input type="radio" name="status" required>
        single <input type="radio"name="status" required>
        other <input type="radio"name="status" required><br><br>
      Password:<br> <input type="password" name="pword" required><br><br>
      Gender: <br> Male <input type="radio" name="gender" required>
      Female <input type="radio"name="gender" required>
      other <input type="radio"name="gender" required><br><br>
      Mobile Number: <br><input id="seven" type="text" name="mnumber" required><br><br>
      Nationality:<br><input id="eight" type="text" name="nation" required><br><br>
      State of origin:<br><input id="nine" type="text" name="soo" required><br><br>
      LGA:<br><input id="ten" type="text" name="lga" required><br><br>
      Residential Address: <br><textarea id="eleven" class="sisi" col="30" name="rdress" required></textarea><br><br> 
      Employment Status: <br> Employed <input type="radio" name="estatus" required>
      Unemployed <input type="radio"name="estatus" required>
      Self Employed <input type="radio"name="estatus"required>
      others<input type="radio"name="estatus" required> <br><br>
      Office Address: <br><textarea id="twelve"  class="sisi"  col="30" row="2" name="odress" required></textarea><br><br> 
      Amount investing: <br><input id="thirdteen" type="text" name="ainvest" required><br><br>
      Date of investing: <br> <input id="fourteen" type="date" name="doinvest" required><br><br>
      I <input id="fifteen" type="text" name="iname" required> hereby willingly decide to invest in Stephotec Computer Technologies, and willingly accept all the terms and condition given.<br><br>
        Signature of investor:<br> <input id="sixteen" type="text" name="soi" required><br><br>
        Signature of company:<br> <input id="seventeen" type="text" name="soc" required><br><br>
        Date:<br> <input id="eighteen" type="date" name="dob2" required><br><br>
    </fieldset><br>
                
    
        <div class="one alert alert-secondary" id="display">
        
        </div>   
        <br>
        
        <button type="submit" name="login">Login</button>

    </div>

<form>

    
        
          </body>
   
          </html>  