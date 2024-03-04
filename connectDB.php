<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_hedkorleaw';
 
$conn = mysqli_connect($host, $username, $password, $database);

if($conn){
    // echo "connect success";
}else{
    // echo "wrong connect";
}
?>