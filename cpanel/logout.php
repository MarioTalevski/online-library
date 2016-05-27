<?php
	echo "<div class='successmessage'>Успешно се одлогиравте!</div>";
	$reconnectobject = new reconnect;
	$reconnectobject -> reconnecttodashboard ();
	include "dashboard.php";
	setcookie("logged-biblioteka", "0", time()-900);
	session_destroy()
?>