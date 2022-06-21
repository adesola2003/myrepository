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


<?php
 //Topic: File Handling
//method of file handling
//1. readfile():e.g
/*
 $f = readfile("kanyin.txt");
    echo substr($f, strlen($f));
    */
//2. f.open( means file open):e.g

 /*   $myfile = fopen("kanyin.txt", "r");
//3. feof(file end of file)
  /*  while(!feof($myfile)){
    echo fgets($myfile) . "<hr>";
    }
    fclose($myfile);*/
//4. fgetc(file get character)
/*while(!feof($myfile)){
    echo fgetc($myfile). "<hr>";
    }
    fclose($myfile);

*/
?>

<?php
//<h2>PHP create and write</h2>
    $myfile = fopen("kanyin3.txt", "a") or die("error trying to load file");
    fwrite($myfile, "this is oyin");
    fclose($myfile);
    ?>
</body>
</html>

