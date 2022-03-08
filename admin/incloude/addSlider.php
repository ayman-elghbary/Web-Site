<?php
if(!$_SESSION || $_SESSION['priv']<300){
   echo "You do not have a permit To Add  ";
   ?>
   <a href="slider.php">

<button 
class="btn btn-warning">Click to Back</button>
</a>
<?php
   return;
   
}
?>
<form method="POST" action="function/doAddslider.php" enctype="multipart/form-data" >
<!-- <label>الاسم</label>
<input type="text" name="namear" class="form-control" placeholder="Write Category" required>
</br>
<label>Name</label>
<input type="text" name="nameen" class="form-control" placeholder="Write Category" required>
</br> -->
<label>Cover</label>
<input type="file"  name="cover[]" class="form-control" >
</br>

<input value="go" type="submit" class="form-control btn btn-primary">

</form>
