<table>
<tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
</tr>
<?php
//to get list of all the types of filters

//foreach(filter_list() as $id =>$filter){
 //   echo'<th><td>' .$filter .'</td></td>' . filter_id($filter).'</td></tr>'
//}
//</table>
?>
<?php
//to remove all html tag
$str = "<h1>Hello World!</h1>";
echo $str;
echo '<br>';
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

echo '<br>';
echo '<br>';

echo '<br>';


//to check integer
$int = 0;

if(filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("integer is valid");

}else{
    echo("integer is not valid");
}

echo '<br>';
echo '<br>';

echo '<br>';


//to check ip address
//$ip = $_SERVER["HTTP_HOST"];
//$ip = $_SERVER["REMOTE_HOST"];
$ip = $_SERVER["REMOTE_ADDR"];
if(!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo(" $ip IP ADDRESS is valid");

}else{
    echo("$ip IP ADDRESS  is not valid");
}
?>