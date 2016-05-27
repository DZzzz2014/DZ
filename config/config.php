<?php
$dblocation="localhost";
$dbname="DZ";
$dbuser="root";
$dbpass="";
$cfg['LoginCookieValidity']=36000;


$dbcnx=mysqli_connect($dblocation, $dbuser, $dbpass);
if(!$dbcnx){
exit("Error connect");
}

$dbsel=mysqli_select_db($dbcnx, $dbname);
if(!$dbsel){
exit("Error use db");
}

mysqli_query($dbcnx, "set names 'utf8'");