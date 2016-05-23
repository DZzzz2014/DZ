<?php
$scripts=array('/media/ckeditor/ckeditor.js');
require_once("templates/top.php");
$_GET['id']=(int)$_GET['id'];
$query="SELECT * FROM products WHERE id=".$_GET['id']." AND user_id=".$_SESSION['id'];

$cat=mysqli_query($dbcnx, $query);
		if(!$cat){
		exit($query);
		}
$tov=mysqli_fetch_array($cat);		

if($_POST){
	$query="UPDATE products SET 
	cat_id='".$_POST['cat_id']."',
	name='".$_POST['name']."', 
	body='".$_POST['body']."', 
	price='".$_POST['price']."', 
	currency='".$_POST['currency']."', 
	product_code='".$_POST['product_code']."'
	WHERE id=".$_GET['id']." AND user_id=".$_SESSION['id'];

	$cat=mysqli_query($dbcnx, $query);
			if(!$cat){
			exit($query);
			}
	?>
	<script>
			document.location.href='cabinet.php';
	</script>
	<?php
}
?>
<form action="tovsedit.php?id=<?=$_GET['id'];?>" method="post" enctype='multipart/form-data'>
   <div class="form-group">
    <label for="cat_id">Категория</label>
	<select name="cat_id" class="form-control" value="<?=$tov['cat_id'];?>">
		<?php
		$query="SELECT*FROM categories WHERE showhide='show'";
		$cat=mysqli_query($dbcnx, $query);
		if(!$cat){
		exit($query);
		}
		while($cats=mysqli_fetch_array($cat)){
		?>
		<option <?=($tov['cat_id']==$cats['id'])? 'selected':''?> name=<?=$cats['id']?>>
		<?=$cats['name'];?>
		</option>
		<?php
		}
		?>
	</select>
  </div>
  <div class="form-group">
    <label for="name">Название</label>
    <input value="<?=$tov['name'];?>" name="name" type="text" class="form-control" id="name" placeholder="Введите название продукта">
  </div>
    <div class="form-group">
    <label for="body">Описание</label>
	<textarea name="body" class="form-control ckeditor"  rows="3" placeholder="Введите описание продукта"><?=$tov['body'];?></textarea>
  </div>
  
<div class="form-group">
    <label for="price">Цена</label>
    <input value="<?=$tov['price'];?>" name="price" type="text" class="form-control" id="price" placeholder="Введите цену продукта">
  </div>
  <div class="form-group">
    <label for="currency">Валюта</label>
	<select name="currency" class="form-control" value="<?=$tov['currency'];?>">
	  <option>BYR</option>
	  <option>USD</option>
	  <option>RUR</option>
	  <option>EUR</option>
	</select>
  </div>
  <div class="form-group">
    <label for="product_code">Код продукта</label>
    <input value="<?=$tov['product_code'];?>" name="product_code" type="text" class="form-control" id="product_code" placeholder="Введите код продукта">
  </div>
  
  <button type="submit" class="btn btn-default">Отправить</button>
</form>

<?php
require_once("templates/bottom.php"); ?>
