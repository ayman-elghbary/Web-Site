<?php
session_start();
include 'connect.php';
$id=$_POST['id'];

if($_SESSION['priv']<300){
    
    
}else {
    
    $sql="DELETE FROM slider WHERE id=$id";
    $conn->query($sql);
    
    
}


?>