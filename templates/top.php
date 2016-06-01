<?php session_start();
require_once("config/config.php");?>
<!doctype html> 
<html>
<head>
	<title>Декоративные изделия из стали в стиле Loft - для дома и квартиры</title>
	<meta charset="utf8"/>
	<meta name="description" content = "текст"/>
	<meta name="keywords" content= "ключевые слова"/>
	<meta name="authоr" content="DZ"/>
	<link rel="stylesheet" type ="text/css" href="media/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type ="text/css" href="media/css/style.css" />
<script src=/media/js/jquery-2.2.4.min.js>
</script>

<?php
if($scripts){
foreach($scripts as $one){
?>
<script src='<?=$one;?>'></script>
<?php
}
}	
?>
</head>
<body>
	<div class= "header">	
		<div class=col-md-8>	
			<img id="logo" src="media/img/Logo.png"/>
		</div>
		<div class=col-md-4>
			<h1>Декоративные изделия из стали в стиле Loft - для дома и квартиры</h1>
		</div>
		<br style="clear:both"/>
	</div>

	<nav class="topmenu">
		<a href="/" class="btn btn-success btn-block">Главная</a>
		<a href="index.php?url=about" class="btn btn-success btn-block">Кто мы</a>
		<a href="index.php?url=examples" class="btn btn-success btn-block">Что мы можем</a>
		<a href="#" class="btn btn-success btn-block">Цены</a>
		<a href="#" class="btn btn-success btn-block">Акции</a>
		<a href="works.php" class="btn btn-success btn-block">Примеры наших работ</a>
		<a href="index.php?url=contacts" class="btn btn-success btn-block">Контакты</a>
	</nav>
	<div class="cont">
		<div class="col-md-2 side_menu_1">
			<h3 Style="text-align: center">Услуги</h3>
			<a href="#" class="btn btn-success btn-block" >Architectural Design</a></br>
			<a href="#" class="btn btn-success btn-block" >Renovation Design Concepts</a></br>
			<a href="#" class="btn btn-success btn-block" >Custom New Home Concepts</a></br>
			<a href="#" class="btn btn-success btn-block" >Luxury & Prestige Home Concepts</a></br>
			<a href="#" class="btn btn-success btn-block" >External works & Landscape Concepts</a></br>
			<a href="#" class="btn btn-success btn-block" >Interior Design</a></br>
			<a href="#" class="btn btn-success btn-block" >Graphic Design</a></br>
			<a href="#" class="btn btn-success btn-block" >Logo Design</a></br>
			<a href="#" class="btn btn-success btn-block" >Freelance Art</a></br>		
		</div>
		<div class=col-md-8>