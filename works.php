<?php require_once("templates/top.php");
$query="SELECT*FROM categories WHERE showhide='show'";
$cat=mysqli_query($dbcnx, $query);
if(!$cat){
exit($query);
}
while($cats=mysqli_fetch_array($cat)){
?>
<a href="product.php?id=<?=$cats['id']?>" class="btn btn-success">
<?=$cats['name'];?>
</a>
<?php
}
 require_once("templates/bottom.php");   ?>