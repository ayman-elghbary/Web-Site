<?php
session_start();
include "connect.php";
$namear=$_POST['namear'];
$nameen=$_POST['nameen'];
$description__ar=$_POST['description_ar'];
$description__en=$_POST['description_en'];
$imgname=[];
foreach ($_FILES['cover']['tmp_name'] as $key => $value) {
$img_name=$_FILES['cover']['name'][$key];
$img_size=$_FILES['cover']['size'][$key];
$img_tmp=$_FILES['cover']['tmp_name'][$key];
$img_ext=pathinfo($img_name,PATHINFO_EXTENSION);
$arrext=array("jpg","png","gif","JPG","PNG","GIF");
$extuplad=explode(".",$img_name);
$extupladcheck=end($extuplad);
 if(!in_array($extupladcheck,$arrext)){
    echo "img error";
    exit();
}
 if($img_size>5000000){
     echo "size error";
     exit();
 }
$new_img_name=time().rand(1,10).$img_name;
$imgname[]=$new_img_name;
move_uploaded_file($img_tmp,"../incloude/imagecategory/$new_img_name");
}
$imp=implode(',',$imgname);
$sql="INSERT INTO trainingcategory( name_ar, name_en, description_ar, description_en, cover)
 VALUES ('$namear','$nameen','$description__ar','$description__en','$imp')";
$pr=$conn->query($sql);
if (!$pr) {
    echo $conn->error;}
  header("location:../category.php");
?>