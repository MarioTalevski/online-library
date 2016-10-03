<?php
$iusername = $_SESSION['username'];
if (isset($_SESSION['username']))
{
	echo "<div class='messageerror'>Немате пристап до оваа страница бидејќи веќе сте логирани со $iusername!</div>";
	include ("profile.php");
	echo $redirecttoprofile;
}
else
{
	include("templates/register.tmp.php");
}
?>
