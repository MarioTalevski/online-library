<?php

include ("_objects.php");
include ("_database.php");
$connect_to_db = mysql_connect("$dbasehost","$dbaseusername","$dbasepassword");
if (!$connect_to_db)
{
	$messageobject = new message;
	$messageobject -> errordb1();
	die (); 
}
$select_db = mysql_select_db("$dbasename");
if (!$select_db)
{
	$messageobject = new message;
	$messageobject -> errordb2 ();
	die (); 
}

mysql_query("SET NAMES utf8");

if(isset($_GET['site'])) { $site=$_GET['site']; }
?>