<?php require_once("templates/top.php");
if($_GET['url']){
	$file=$_GET['url'];
}else{
	$file='index';
}

$query="select*from maintexts where url='$file'";
$adr=mysqli_query($dbcnx, $query);
if(!$adr){
exit($query);//убрать $query
}
$str=mysqli_fetch_array($adr);
//echo"<pre>";
//print_r($str);
//echo"</pre>";
   ?>
			<h2><?=$str['name']; //<?php echo$str['name'];?></h2> 
			<div class="content"> 
			<?=$str['body'];?>
			</div>
<?php require_once("templates/bottom.php");   ?>