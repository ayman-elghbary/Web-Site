<?php
session_start();
include "../admin/function/connect.php";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$date= date("Y-m-d");
$sql="INSERT INTO messages( name, email, phone, message,  date) 
VALUES ('$name','$email','$phone','$message','$date')";
$pr=$conn->query($sql);
if (!$pr) {
    echo $conn->error;}
    include '../div.php';
    header("refresh:4;url=../index.php");
?>