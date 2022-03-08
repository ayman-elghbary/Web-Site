<?php
session_start();
include_once 'connect.php';
$id=$_POST['id'];
if($_SESSION['priv']<300){
   
}else
 
    $sql="DELETE FROM users WHERE id=$id";
    $conn->query($sql);
  
    if (!$conn->query($sql)) {
        echo $conn-> error;
    }


?>