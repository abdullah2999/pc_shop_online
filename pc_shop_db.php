<?php
include "config.php";
global $host, $user, $pass, $db;

$conn = new mysqli('localhost','root','','pc_shop');
if ($conn->connect_error){
   echo "Connection failed: ".$conn->connect_error;
}
?>