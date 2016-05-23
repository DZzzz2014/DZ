<?php @SESSION_start();

if(!$_SESSION['id']){
header('location:/login.php');
}