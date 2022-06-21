 <?php
 
 if($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['upload'])){
     $target_dir = "uploads/";
    $tm = time();
     $targe_file =  $target_dir.substr($tm,0,4)."_".basename($_FILES['filetoupload']['name']);

     
    $file_extention = strtolower(pathinfo($targe_file,PATHINFO_EXTENSION));

    echo $file_extention;
    
    if($file_extention != "jpg" && $file_extention != "png" && $file_extention != "gif" && $file_extention != "jpeg"){
        echo " Only jpg, png, jpeg, and gif are allowed";
    }else{

    if($_FILES['filetoupload']['size'] > 20000){
        echo 'file is too big';
    }else{
        $display= $targe_file;

    if(file_exists($targe_file)){
        echo "<br>File already exists<br>";
    }else{


   if(move_uploaded_file($_FILES['filetoupload']['tmp_name'], $targe_file)){
    echo "<br>successful<br>";


     }
    }
 }
}
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
    
<h1>PHP FILE HANDLING</h1>
<h2>PHP readfile() Function</h2>

    <form action="fileuploading.php" method ="post" enctype="multipart/form-data">

    <input type="file" name="filetoupload">
        <button name="upload">Upload</button>
       <br><br>

    <img src="<?php
    if(isset($targe_file)){
        echo  $display;}
    ?>">


    </form>

</body>
</html>