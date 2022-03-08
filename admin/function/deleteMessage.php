<?php
session_start();
include 'connect.php';
$id=$_GET['id'];
if($_SESSION['priv']<300){
    echo 'You do not have a permit / Page will Be Back now';
    
    header("refresh:5;url=../messages.php");
    
}
else{
$sql="DELETE FROM messages WHERE id=$id";
$conn->query($sql);
header("location:../messages.php");
}
?>