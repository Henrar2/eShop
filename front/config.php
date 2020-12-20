<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "eshop"; /* Database name */
$con =  mysqli_connect($host,$name,$pass,$dbname);
if(!$con){
    die(header('Location: http://192.168.1.6/')); //TODO Change IP to an error page 
}
?>
