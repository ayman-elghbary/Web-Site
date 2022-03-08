<?php
include 'connect.php';
$id=$_POST['id'];
$namear=$_POST['namear'];
$nameen=$_POST['nameen'];
$descriptionar=$_POST['descriptionar'];
$descriptionen=$_POST['descriptionen'];
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
    move_uploaded_file($img_tmp,"../incloude/imageabout/$new_img_name");
    }
 
    $imp=implode(',',$imgname);
$sql="UPDATE about SET name_ar='$namear',name_en='$nameen',description_ar='$descriptionar',description_en='$descriptionen',cover='$imp' WHERE id =$id";
$conn->query($sql);
if (!$conn->query($sql)) {
    echo $conn->error;
}

header("location:../about.php");
?>