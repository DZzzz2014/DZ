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
		<a href="/">Главная</a>
		<a href="index.php?url=about">Кто мы</a>
		<a href="index.php?url=examples">Что мы можем</a>
		<a href="#">Цены</a>
		<a href="#">Акции</a>
		<a href="works.php">Примеры наших работ</a>
		<a href="index.php?url=contacts">Контакты</a>
	</nav>
	<div class="cont">
		<div class=col-md-2>
			<h3>Услуги</h3>
			<a href="#" class="btn btn-success btn-block" >Изготовление уникальных дизайнерских элементов декора</a></br>
				
		</div>
		<div class=col-md-8>