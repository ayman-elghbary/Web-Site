

<?php
if(!$_SESSION || $_SESSION['priv']<300){
   echo "You do not have a permit To Edite  ";
   ?>
   <a href="about.php">

<button 
class="btn btn-warning">Click to Back</button>
</a>
<?php
   return;
   
}



$id=$_GET['id'];
$sql="SELECT * FROM about WHERE id=$id";
$result=$conn->query($sql);
while ($row=$result->fetch_assoc()) {
   $arrayabout=explode(",",$row['cover']);
   ?>						
<form method="POST" action="function/doEditeAbout.php" enctype="multipart/form-data" >
<label>الاسم</label>
<input type="text" name="namear" class="form-control" value="<?=$row['name_ar'] ?>">
</br>
<label>Name</label>
<input type="text" name="nameen" class="form-control" value="<?=$row['name_en'] ?>">
</br>
<label>الوصف باللغة العربية</label>
<textarea style="width:90%;height:300px" name="descriptionar" ><?=$row['description_ar'] ?></textarea>
</br>
<label>الوصف باللغة الانجليزية</label>
<textarea style="width:90%;height:300px" name="descriptionen" ><?=$row['description_en'] ?></textarea>
</br>
<label>Cover</label>

<input type="file" multiple="" name="cover[]"  class="form-control">
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