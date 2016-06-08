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
	<link href='https://fonts.googleapis.com/css?family=Ruslan+Display&subset=latin,cyrillic' rel='stylesheet' type='text/css'/>
<?php
if($styles){
foreach($styles as $one){
?>
<link rel="stylesheet" type ="text/css" href="<?=$one;?>" />
<?php
}
}	
?>
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
<main>
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
		<a class="<?php if($_GET['url']=="about"){echo "active-link";}  ?>" href="index.php?url=about">Кто мы и что мы можем</a>
		<a href="index.php?url=examples">Примеры наших работ</a>
		<a href="works.php">Каталог</a>
		<a href="index.php?url=contacts">Контакты</a>
		<a href="tasks.php">Задания от Павла Ш</a>
	</nav>
	<div class="cont">
		<div class="col-md-2 side_menu_1">
			<!--<h3 Style="text-align: center">Услуги</h3>
			<a href="#" class="btn btn-success btn-block" >Architectural Design</a></br>
			<a href="#" class="btn btn-success btn-block" >Renovation Design Concepts</a></br>
			<a href="#" class="btn btn-success btn-block" >Custom New Home Concepts</a></br>
			<a href="#" class="btn btn-success btn-block" >Luxury & Prestige Home Concepts</a></br>
			<a href="#" class="btn btn-success btn-block" >External works & Landscape Concepts</a></br>
			-->
		</div>
		<div class=col-md-8>