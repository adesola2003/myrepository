<?php
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['upload']) ){

    $unames = $_POST['textarea'];

   // $f = readfile("kanyin4.txt");
   // echo substr($f, $uname);

    $myfile = fopen("post.txt", "a") or die("error trying to load file");
    fwrite($myfile, $unames);
     
    fclose($myfile);
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
   

    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/kings.css">
</head>
<body>

    <header>
        <div class="topnav">
            <div class="logout2">
            <a href="admin.php"><div class="logout"><span><i class="fa fa-power-off" aria-hidden="true"></i>Logout</span></div></a>
        </div>
        </div>
  
    <input type="checkbox" id="check">
    <label for="check"><i class="fa fa-bars" id="slide"></i>Dash</label>
    
    <div class="sideba" id="check">

        <span><img src="uploads/admin/oga.JPG"></span>
        <span><h1>Oyodele David</h1></span>
        <a href="#"><i class="fa fa-th-large"></i><span>Dashboard</span></a>
       
       
    </div>
    
    <div class="postcontainer">
        <form action="post.php" method="POST">
        <div class="postupdates">
            <select>
                <option value="#"><span>Select the section to edit</span></option>
                <option value="about"><span>About</span></option>
                <option value="PropreitorSpeech"><span>Propreitor Speech</span></option>
                <option value="SchoolHistory"><span>School History</span></option>
                <option value="OurVision"><span>Our Vision</span></option>
                <option value="OurMission"><span>Our Mission</span></option>
                <option value="OurPhilosophy"><span>Our Philosophy</span></option>
                <option value="PTA"><span>PTA</span></option>
                <option value="AccreditionAndAffiliations"><span>Accredition And Affiliations</span></option>

                <option value="OurVision"><span>Curriculum</span></option>
                <option value="OurVision"><span>Academic Calender</span></option>
                <option value="OurVision"><span>Subject Offered and grading policies</span></option>
                <option value="OurVision"><span>Application Procedure</span></option>
                <option value="OurVision"><span>Payment Details</span></option>
                <option value="OurVision"><span>Assembly</span></option>
                <option value="OurVision"><span>Facilities</span></option> 
                <option value="OurVision"><span>Clubs And Societies</span></option> 
                <option value="OurVision"><span>Transport Services</span></option> 
                <option value="OurVision"><span>Contact</span></option>          
                </option>
                
            </select>
           

            <textarea  cols="100" rows="20" name="textarea">

            </textarea>
            <label for="myfile"> Select a File</label>
            <input type="file" name="myfile">
            <button type="submit" name="upload" value="post">Post</button>

        </div>
    </form>

    </div>
    
</body>
</html>

