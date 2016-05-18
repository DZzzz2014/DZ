<?php
$scripts=array('/media/ckeditor/ckeditor.js');
 require_once("templates/top.php");
if($_SESSION['id']){
if($_POST){

	$error=array();
	$filterArr=array('');
	$error[]=(empty($_POST['name']))?'Название не заполнено':'';
	$error[]=(empty($_POST['body']))?'Описание не заполнено':'';
	$error[]=(empty($_POST['price']))?'Цена не введена':'';
	$error[]=(empty($_POST['product_code']))?'product_code не заполнено':'';
			
	$errors=array_diff($error,$filterArr);
	if(!empty($errors)){
		foreach($errors as $err){
			echo"<span class='error' style='color:red'>";
			echo $err;
			echo"</span><br/>";
		}
	}else{
	$query="INSERT INTO products(
		cat_id,
		name,
		body,
		price,
		currency,
		product_code,
		picture,
		picture_small,
		user_id,
		status,
		putdate)VALUES(
		'".$_POST['cat_id']."',
		'".$_POST['name']."',
		'".$_POST['body']."',
		'".$_POST['price']."',
		'".$_POST['currency']."',
		'".$_POST['product_code']."',
		'',
		'',
		'".$_SESSION['id']."',
		'new',
		NOW()
		)";
		
		$cat=mysqli_query($dbcnx, $query);
		if(!$cat){exit($query);}
		?>
		<script>
			document.location.href='cabinet.php';
		</script>
		<?		
	}
			
	//print_r($_POST);
}
?>
<form action="cabinet.php" method="post" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="cat_id">Категория</label>
	<select name="cat_id" class="form-control">
		<?php
		$query="SELECT*FROM categories WHERE showhide='show'";
		$cat=mysqli_query($dbcnx, $query);
		if(!$cat){
		exit($query);
		}
		while($cats=mysqli_fetch_array($cat)){
		?>
		<option name=<?=$cats['id']?>>
		<?=$cats['name'];?>
		</option>
		<?php
		}
		?>
	</select>
  </div>
  <div class="form-group">
    <label for="name">Название</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Введите название продукта">
  </div>
    <div class="form-group">
    <label for="body">Описание</label>
	<textarea name="body" class="form-control ckeditor"  rows="3" placeholder="Введите описание продукта"></textarea>
  </div>
  
<div class="form-group">
    <label for="price">Цена</label>
    <input name="price" type="text" class="form-control" id="price" placeholder="Введите цену продукта">
  </div>
  <div class="form-group">
    <label for="currency">Валюта</label>
	<select name="currency" class="form-control">
	  <option>BYR</option>
	  <option>USD</option>
	  <option>RUR</option>
	  <option>EUR</option>
	</select>
  </div>
  <div class="form-group">
    <label for="product_code">Код продукта</label>
    <input name="product_code" type="text" class="form-control" id="product_code" placeholder="Введите код продукта">
  </div>
  <div class="form-group">
    <label for="picture">Изображение</label>
    <input name="picture" type="file" id="picture">
    <p class="help-block">Выбирете изображение</p>
  </div>
  <button type="submit" class="btn btn-default">Отправить</button>
</form>



<?php
}else{
echo'ошибка входа';
}
require_once("templates/bottom.php"); 
?>
<!--<script src='/media/ckeditor/ckeditor.js'></script>>