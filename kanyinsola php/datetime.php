<?php
 echo "&copy" . date("Y - M - d h:i:sa");


 $d =strtotime("10:30pm April 15 2021");
 echo "<br>";
   echo "created date is " . date("Y - M - d h:i:sa", $d);
   echo "<br>";
   $t =strtotime("tomorrow");
   echo "Tomorrow date is " . date("Y - M - d h:i:sa", $t);

   $n =strtotime("next saturday");
 echo "<br>";

 echo "Next Saturday is " . date("Y - M - d h:i:sa", $n);

 $o =strtotime("+3 month");
 echo "<br>";
 echo "Next 3 month is " . date("Y - M - d h:i:sa", $o);

?>