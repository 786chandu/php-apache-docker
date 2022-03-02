<?php
$host = 'db';
$user = 'chandrabhan';
$password = 'chandrabhan';
$db = 'cdweb';
$conn = new mysqli($host,$user,$password,$db);
if($con->connect_error){
    echo '!!!! failed !!!!!' . $conn->connect_error;

}
echo ' it s great all is done you have containerized your web app !!! ';
?>
