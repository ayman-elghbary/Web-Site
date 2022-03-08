<?php

$id=$_POST['id'];

include 'connect.php';

$update = "UPDATE messages SET view = 1 WHERE id = $id";



if($conn -> query($update)){

	echo 'success' ;

} else {
	echo $conn -> error ;
}

?>