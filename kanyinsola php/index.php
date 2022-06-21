


<?php


/*echo '<h1 style="color:red;">welcome to php</h1>';
$x = 100;
$y = 200;
$sum = $x + $y;
echo $sum;

echo"<br>";
$e = "kanyinsola";
$r = 200;
$sum = $e . $r;
echo $sum;

echo"<br>";
$o = true;
$u = false;

echo $o;
echo $u;
echo"<br>";
//variable
//a.
$salary = 20000;
$_name = "stephotec";
$num1 = 20000;
echo $salary;
echo"<br>";
echo $_name;
echo"<br>";
echo Var_dump($num1);
echo"<br>";
echo Var_dump($salary);

echo"<br>";
echo' your salary is ' .$salary;


echo"<br>";
$l = 54;
$m = 200;
$ret = print($l + $m) ;
echo"<br>";
echo $ret;



echo"<br>";

?>


<h1 style="color:green;">welcome to php</h1>
<input type="text"> 

<?php

echo"<br>";
echo"<br>";
$salary = 20000; //global scope/varianle

function greet($name){

    $age=23; //local variable: only access inside the function
    echo"welcome ".$name;
}

    greet("oyin");
    echo"<br>";
    echo"<br>";
    echo"<br>";

    $salary = 30000;
    function green(){
    global $salary;
        $age=23; //local variable: only access inside the function
        echo"welcome ".$salary;
    }
    
        green();
//echo $age
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";

$salar = 30000;
$p = 45000;

function geet(){
    //global $salary;
   // $age=23; //local variable: only access inside the function
    echo "welcome ".$GLOBALS['p'];
    echo "<br>";

    echo "welcome ".$GLOBALS['salar'];
    echo "<br>";


  //  echo "welcome " .$GLOBALS['p'] + $GLOBALS['salar']; //to be checked out something is wrong

 //   $sa = $GLOBALS['p'] + $GLOBALS['salar'];
//    echo "welcome ".$sa
  echo $GLOBALS['p'] + $GLOBALS['salar'];

}

    geet();
    echo "<br>";
    echo Var_dump($salar);
    echo "<br>";
    echo Var_dump($p);*/
?>



<?php
     // topic : static
  /*  function mytest() {
        static $s = 0;
        echo $s;
        $s++;
    }
    mytest();
    mytest();
    mytest();
    mytest();




    echo "<br>";
  function sum($num1, $num2) {
    return $num1 + $num2;
  }

  $result = sum(6000, 45600);

  echo $result;
  echo "<br>";

// topic: if statement

  $ages = 67;
  if($ages <= 65){
    echo "you are an adult";
  }elseif($ages > 65){
    echo "you are too old";
  }else{
    echo "I don't know your"; 
  }
// topic : switch 

  $favcolor = "red";
  switch($favcolor){
  case "red";
    echo "your favourite color is red!";
    break;
  case "blue";
    echo "your favourite color is blue!";
    break;
  case "yellow";
    echo "your favourite color is yellow!";
    break;
    default;
    echo "your favourite color is neither red, blue or yellow";
  }

// topic : loops
//subtopic : 1. for loop example1
   for ($x= 0; $x <= 10; $x++){
     echo "The number is: $x <br>";
   }*/
/*
//subtopic : 1. for loop example2
for ($x= 0; $x <= 10; $x++){
  if($x == 4){
    continue;
  }
  echo "The number is: <input type='text' value=' $x'> <br><br>";
}


/*
// subtopic : 2. while loop
$x = 1;
while ($x <= 10) {
  echo "The number is: $x <input type='text'> <br><br>";
  $x++;
}


// subtopic :3. do while loop
$x = 11;
do {

  echo "The number is: $x <input type='text'> <br><br>";
  $x++;

}while ($x <= 10);


// subtopic :4. using an if statement in  do while loop
//example 1
$x = 1;
do {
   if($x == 6){
     break;
   }
  echo "The number is: $x <input type='text'> <br><br>";
  $x++;

}while ($x <= 10);
*/
/*
//topic: array
$cars = "volvo";
$cars = "BMV";
$cars = "Toyota";

$cars = array("volvo", "BMV", "Toyota", "honda");
// subtopic: index array are array that target array using the index
echo $cars[0];
echo "<br>";
// subtopic: to calculate the number of element in array
echo count($cars);
//subtopic: to add element to an array
echo "<br>";
$cars[4] = "Benz";
$cars [count($cars)] = "musbuchhic";

echo count($cars);
//subtopic: to replace an array
$cars[1] = "lexus";

//subtopic: to loop an array
echo "<ul style='list-style-type:none;'>";

for ($i=0; $i < count($cars); $i++) { 
  echo "<li> $i " .$cars[$i].  "</li>";
}

echo "</ul>";
/*
//subtopic: associative array
$age = array("peter" => "35" "ben" => "37",  "joe" => "57",);
*/
/*
echo "<br>";
$age["peter"] = "35";
$age["ben"] = "37";
$age["joe"] = "57";

// echo $age["ben"];

foreach($age as $j => $j_value){
  if($j_value= 37){
    echo $j_value."<br>";
  };

  echo $j_value."<br>";
  echo $j."<br>";
}*/

/*
//example2
$age["peter"] = "35";
$age["ben"] = "37";
$age["joe"] = "57";

// echo $age["ben"];
echo "<table style='border:2px solid;'>";

foreach($age as $j => $j_value){
  
    echo "<tr><th style='border:2px solid; padding:20px; background-color:orange'>".$j_value."</th></tr>";
    
   
   
  

//  echo $j_value."<br>";
 // echo $j."<br>";

 
}


echo "</table>";*/




/*



//example3
$age["peter"] = "35";
$age["ben"] = "37";
$age["joe"] = "57";

// echo $age["ben"];
echo "<table style='border:2px solid;'>
<tr style='border:2px solid; padding:20px; background-color:orange;'><th>Key</th><th>Value</th></tr>
";

foreach($age as $j => $j_value){
  
/*echo "<tr><th style='border:2px solid; padding:20px; background-color:orange'>".$j_value."</th>";
    
    echo "<tr><td style='border:2px solid; padding:20px; background-color:orange'>".$j."</td></tr>";
   
  

//  echo $j_value."<br>";
 // echo $j."<br>";



    echo 
   "<tr style='border:2px solid; padding:20px; background-color:orange;'><td>$j</td> <td>$j_value</td>
 
    </tr>";



 
}


echo "</table>";






//topic:super global variable 
//types are
//1. $GLOBAL
$x = 75;
$y = 25;
$name = "kanyinsola";
function addition(){
 echo $GLOBALS['z'] =  $GLOBALS['x'] +  $GLOBALS['y'];
}

addition();

  //echo$z

//2.$_SEVER
 echo $_SERVER['PHP_SELF'];
  echo "<br>";

  echo $_SERVER['SERVER_NAME'];
  echo "<br>";


  echo $_SERVER['HTTP_HOST'];
  echo "<br>";



  echo $_SERVER['HTTP_USER_AGENT'];
  echo "<br>";

  
  echo $_SERVER['REMOTE_HOST'];
  echo "<br>";

  echo $_SERVER['SERVER_ADMIN'];
  echo "<br>";

*/


/*
// topic: to get information on a page
//subtopic: using $_GET
  $username = $_GET['uname'];
  $password = $_GET['pass'];
echo "Welcome ".$username . " your password is ".$password;
*/


//subtopic: using $_POST
//$username = $_POST['uname'];
//$password = $_POST['pass'];
//echo "Welcome ".$username . " your password is ".$password;


session_start();


echo "<h1>HOMEPAGE</h1>";



echo "Welcome " . $_SESSION['username'] ."<br> Your Password is ". $_SESSION['password'] . "<br> And Your ID is ". $_SESSION['userid'];



?>