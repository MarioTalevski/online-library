<?php
if (!isset($_COOKIE['visit-biblioteka']))
{
	setcookie("visit-biblioteka", "1", time()+3600*24);
	$query = mysql_query("SELECT * FROM settings WHERE name = 'today_visit'");
	while($value = mysql_fetch_array($query))
	{ $visits = $value['value']; }
	$newvalue = $visits + "1";
	mysql_query("UPDATE settings SET value=$newvalue WHERE name='today_visit'");

	$query = mysql_query("SELECT * FROM settings WHERE name = 'month_visit'");
	while($value = mysql_fetch_array($query))
	{ $visits = $value['value']; }
	$newvalue = $visits + "1";
	mysql_query("UPDATE settings SET value=$newvalue WHERE name='month_visit'");

	$query = mysql_query("SELECT * FROM settings WHERE name = 'total_visit'");
	while($value = mysql_fetch_array($query))
	{ $visits = $value['value']; }
	$newvalue = $visits + "1";
	mysql_query("UPDATE settings SET value=$newvalue WHERE name='total_visit'");
}

if (date ("H:i:s") == date("12:00:00"))
{ mysql_query("UPDATE settings SET value=0 WHERE name='today_visit'"); }

if (date ("d H:i:s") == date("01 00:00:01"))
{ mysql_query("UPDATE settings SET value=0 WHERE name='month_visit'"); }
?>