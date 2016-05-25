<?php
require_once("config/config.php");
$query="SELECT*FROM products WHERE id=".$_POST['id'];
$cat=mysqli_query($dbcnx, $query);
if(!$cat){
exit($query);
}
$cats=mysqli_fetch_array($cat);
?>
<h3>
 <?=$cats['name'];?>
</h3>
<?php
if ($cats['picture']){
echo "<img src='".$cats['picture']."' width=100%>";
}
?>
<div>
Цена: <?=$cats['price'];?> <?=$cats['currency'];?>
</div>
<div>
Код товара: <?=$cats['product_code'];?>
</div>
