<?php
$host = "localhost"; /* Host name */
$name = "root";    /* User */
$pass = "";        /* Password */
$dbname = "eshop";     /* Database name */
$con =  mysqli_connect($host,$name,$pass,$dbname);
if(!$con){
    die(header('Location: ./index.php')); //TODO Change IP to an error page 
}else{
    echo $con->connect_error;   
}
?>
