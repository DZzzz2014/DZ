<?php 
require_once("templates/top.php");
?>
<div class="col-md-6">
	<form>
	  <div class="form-group">
		<input name="input_amount" type="text" id="summ" placeholder="Введите сумму">
	  </div>
	</form>

	<?php
	$file=$_GET['input_amount'];
	$query="SELECT*FROM products WHERE price='$file'";
	$adr=mysqli_query($dbcnx, $query);
	if(!$adr){
		exit($query);
	}
	while($str=mysqli_fetch_array($adr)){
	echo'<div><img src="'.$str['picture'].'" width="128" height="128" /><br />Наименование: '.$str["name"].'
				<p>Цена: '.$str["price"].'</p>
				</div>';
	}
	?>
</div>
<div class="col-md-6">
	<?php
		$result = mysqli_query($dbcnx, "SELECT * FROM products");	// выбираем все товары
			while($row=mysqli_fetch_array($result))
			{
				echo '<div><img src="'.$row['picture'].'" width="128" height="128" /><br />Наименование: '.$row["name"].'<br /> Цена: '.$row["price"].'
				</div>';
			}
	?>
</div >
<?php
 require_once("templates/bottom.php");   
 ?>