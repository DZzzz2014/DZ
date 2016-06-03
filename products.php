<?php 
$scripts=['/media/js/jquery.js','/media/js/cart.js'];
$styles=['/media/css/demo.css'];
require_once("templates/top.php");
	$result = mysqli_query($dbcnx, "SELECT * FROM products");	// выбираем все товары
		while($row=mysqli_fetch_array($result))
		{
			echo '<div class="product"><img src="'.$row['picture'].'" width="128" height="128" class="pngfix" /><br />'.$row["name"].'
			<a id="good-'.$row["id"].'-'.$row["price"].'" href="#" class="addCart">В корзину ('.$row["price"].')</a>
			</div>';
		}
echo "<pre>";
print_r($_COOKIE['basket']);
echo "</pre>";
// php-код, который генерирует товары
 require_once("templates/bottom.php");   ?>