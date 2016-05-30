<?php 
require_once("config/config.php");
require_once("/utils/phpQuery/phpQuery/phpQuery.php");
$query="SELECT*FROM products WHERE picture='' ORDER BY RAND()";
	$cat=mysqli_query($dbcnx, $query);
	if(!$cat){
		exit($query);
		}
while($tovs=mysqli_fetch_array($cat)){

	$str=@ereg_replace(" ", "+", $tovs['name']);
	$url="http://www.google.by/search?q=$str&hl=ru&biw=1280&bih=487&ie=UTF-8&tbm=isch&source=lnt&tbs=isz:l&sa=X&ved=0ahUKEwiB9aevtoHNAhVKP5oKHS1JDZwQpwUIDg&gws_rd=ssl";
	echo $url."<br/>";
	echo $tovs['name']."<br/>";
	
	$file=file_get_contents($url);
	$document=phpQuery::newDocument($file);
	$henty=$document->find('.images_table td>a:eq(1)')->attr('href');
	$henty=$document->find('body');
	exit($henty);
	$dir=$_SERVER['DOCUMENT_ROOT'].'/uploads/';
	$pic=date('y-m-d-h-i-s').'.jpg';
	if(!@copy($henty, $dir.$pic)){
		echo "не удалось скопировать";
		}
		echo "ok";
		echo $henty;
			
	$query="UPDATE products SET picture='/uploads/$pic' WHERE id=".$tovs['id'];
	$cat1=mysqli_query($dbcnx,$query);
	if(!$cat1){
		exit($query);
		}
		
	echo "<hr />";
	sleep(3);
	}
	?>
	<script>
	document.location.href='cabinet.php';
	</script>
