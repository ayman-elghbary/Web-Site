<?php
if(!$_SESSION || $_SESSION['priv']<300){
   echo "You do not have a permit To Add  ";
   ?>
   <a href="category.php">

<button 
class="btn btn-warning">Click to Back</button>
</a>
<?php
   return;
   
}
?>
<form method="POST" action="function/doAddCategory.php" enctype="multipart/form-data" >
<label>الاسم</label>
<input type="text" name="namear" placeholder="اكتب الاسم باللغة العربية" class="form-control" required>
</br>
<label>Name</label>
<input type="text" name="nameen" placeholder="الاسم باللغة الانجليزية" class="form-control" required>
</br>
<label>الوصف باللغة العربية</label>
<textarea style="width:90%;height:300px"  name="description_ar" ></textarea>
</br>
<label>الوصف باللغة الانجليزية</label>
<textarea style="width:90%;height:300px"  name="description_en" ></textarea>
</br>
<label>Cover</label>
<input type="file" multiple="" name="cover[]" class="form-control">
</br>

</br>
<input value="go" type="submit" class="form-control btn btn-primary">

</form>
