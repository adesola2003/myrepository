    <?php
    session_start();
    
    if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['log']) ){

    
    $_SESSION['userid'] = time(); 
        $_SESSION['username'] = $_POST['uname'];
        $_SESSION['number'] = $_POST['pnumber']; 
        $_SESSION['add'] = $_POST['address'];                
        $_SESSION['email'] = $_POST['email']; 
        $_SESSION['cobj'] =  $_POST['cobj']; 
     
      
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           background-image: url(images/dark4.jpg);
            
            font-size:25px;
        }
        .work{
         color: white;
            width: 500px;
            margin-left: 650px;
        }
        h2{
            color: red;
        }
        input{
            
            color: black;
            border-radius:5px;
            width: 300px;
            height: 27px;
            outline: none;
        }
        form{
           
            padding: 10px;
        }
        textarea{
            outline: none;
            border-radius:5px;
            width: 300px;
            height: 150px;
        }
        button{
            font-size:20px;
            padding: 10px;
            
            border-radius:7px;
        }
        a{
            text-decoration:none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="work">
    <form action="cv.php" method="post"> 
        <h2>CV Template</h2>
        UserID: <br>  <input type="text" name="userid" value="<?php
    echo $_SESSION['userid']
    
    ?>" readonly> <br><br>
     Username: <br>  <input type="text" name="uname"> <br><br>
     Phone Number: <br>  <input type="number" name="pnumber"> <br><br>
     Email: <br>  <input type="email" name="email"> <br><br>
     Address: <br><textarea col="100" row="20" name="address"></textarea><br><br>

     Career Objective: <br> <textarea col="100" row="20"  name="cobj"></textarea><br><br>
   
     <button type="submit" name="log"><a href="cv2.php">Submit</a></button>
    </form> 
    </div>
</body>
</html>