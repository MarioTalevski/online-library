<?php session_start (); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="objects.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/objects.js"></script>
</head>
<body>
<?php
include ("_settings.php");
if (isset($_SESSION['user_id']))
{
include ("includes/header.php");
echo "<div class='content'>";
echo "<div id='left'>";
	include "includes/leftcontent.php";
echo "</div>";
echo "<div id='right'>";
if(!isset($site)) $site="dashboard";
$invalide = array('\\','/','/\/',':','.');
$site = str_replace($invalide,' ',$site);
if(!file_exists($site.".php")) $site = "error";
include($site.".php");
echo "</div>";
echo "</div>";
include ("includes/footer.php");
}
else
{ include ("includes/login.php"); }

?>
</body>
</html>