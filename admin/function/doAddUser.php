<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$newpassword=md5($password);
$pr = $_POST['pr'];


include 'connect.php';

$insert1 = "INSERT INTO users (name , email,password , pr) VALUES ('$name' , '$email' ,'$newpassword', '$pr')";
$conn->query($insert1) ;
if (!$conn->query($insert1)) {
    echo $conn-> error;
}