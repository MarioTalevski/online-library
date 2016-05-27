<?php
if ($_SESSION['username'])
{
	session_destroy();
	echo "<div class='messagesuccess'>Успешно се одлогиравте!</div>";
}
else
{ echo "<div class='messageerror'>Не сте логирани за да се одлогирате!</div>"; }
echo $refreshsite;
include ("home.php");
?>