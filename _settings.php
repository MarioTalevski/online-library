<?php
session_start();

$connect_to_db = mysql_connect("$dbasehost","$dbaseusername","$dbasepassword") or die ("Ne mozi da se konektira!");
mysql_select_db("$dbasename") or die("Bazata ne e pronajdena!");
mysql_query("SET NAMES utf8");

include ("includes/visits.php");

if(isset($_GET['site'])) $site=$_GET['site'];
else $site= null;
$refreshsite = "<meta http-equiv='refresh' content='2;url=index.php?site=home' />";
$redirecttoprofile = "<meta http-equiv='refresh' content='2;url=index.php?site=profile' />";
if (isset($_SESSION["username"])) { $menuuser = "profile"; } else { $menuuser = "register"; }
if (isset($_SESSION["username"])) { $menuusertext = "Профил"; } else { $menuusertext = "Зачлени се!"; }
?>