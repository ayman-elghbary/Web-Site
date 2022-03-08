

<?php
if(!$_SESSION || $_SESSION['priv']<300){
   echo "You do not have a permit To Edite  ";
   ?>
   <a href="slider.php">

<button 
class="btn btn-warning">Click to Back</button>
</a>
<?php
   return;
   
}

$id=$_GET['id'];
$sql="SELECT * FROM slider WHERE id=$id";
$result=$conn->query($sql);
while ($row=$result->fetch_assoc()) {
 
   ?>						
<form method="POST" action="function/doEditeSlider.php" enctype="multipart/form-data" >
<!-- <label>الاسم</label>
<input type="text" name="namear" class="form-control" value="<?=$row['name_ar'] ?>">
</br>
<label>Name</label>
<input type="text" name="nameen" class="form-control" value="<?=$row['name_en'] ?>">
</br> -->
<label>Cover</label>
<input type="file" multiple="" name="cover[]" class="form-control">
</br>

</br>
<input type="hidden" name="id" class="form-control" value="<?= $row['id'];   ?>">
</br>

</br>
<input value="go" type="submit" class="form-control btn btn-primary">

</form>
<?php
}

?>

