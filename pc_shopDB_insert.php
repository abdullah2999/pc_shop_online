<?php
include "pc_shop_db.php";


$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];
$user_email=$_POST['user_email'];
$user_phone=$_POST['user_phone'];


$stmt=$conn ->prepare("insert into uesrs(user_name,user_password,user_email,user_phone_number) value (?,?,?,?)");
$stmt -> bind_param("sssi",$user_name,$user_password,$user_email,$user_phone);
$stmt-> execute();

$stmt->close();
$conn->close();
?>