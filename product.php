<?php 
$scripts=['/media/js/model.js'];
require_once("templates/top.php");
$_GET['id'] = (int)$_GET['id'];
$query="SELECT*FROM products WHERE cat_id = ".$_GET['id']." AND showhide='show'";
$cat=mysqli_query($dbcnx, $query);
if(!$cat){
exit($query);
}
?>
<div class='products'>
<?php
while($cats=mysqli_fetch_array($cat)){
?>
<br><a href="#" class="btn btn-link" data_id='<?=$cats['id'];?>'>
 <?=$cats['name'];?> 
 <?php 
 echo "<img src='".$cats['picture']."' width=100px height=50px>";
 ?>
</a>

<?php
}
?>
</div>
<?php
 require_once("templates/bottom.php");   ?>