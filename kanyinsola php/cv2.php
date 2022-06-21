<?php
    session_start();



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
            background-repeat: no-repeat;
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
        UserID: <br>  <input type="text" name="userid"  value="<?php
    echo $_SESSION['userid']
    
    ?>" readonly> <br><br>
     Username: <br>  <input type="text" name="uname"  value="<?php
    echo $_SESSION['username']
    
    ?>" readonly> <br><br>
     Phone Number: <br>  <input type="number" name="pnumber"  value="<?php
    echo $_SESSION['number'];
    
    ?>" readonly> <br><br>

Email: <br>  <input type="email" name="email"  value="<?php
    echo $_SESSION['email'];
    
    ?>" readonly> <br><br>
     Address: <br>   <textarea col="100" row="20" name="address" readonly> <?php
    echo $_SESSION['add'];
    
    ?></textarea > <br><br>

     Career Objective: <br> <textarea col="100" row="20" name="cobj" readonly> <?php
    echo $_SESSION['cobj'];
    
    ?>
    </textarea ><br><br>

     
    </form> 
    </div>
</body>
</html>