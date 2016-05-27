<?php
	$usersquery = mysql_query("SELECT * FROM users");
	$numberofusers = mysql_num_rows($usersquery);
	echo "Број на членови: ".$numberofusers."<br>";
	
	$booksquery = mysql_query("SELECT * FROM books");
	$numberofbooks = mysql_num_rows($booksquery);
	echo "Број на книги: ".$numberofbooks."<br>";
	
	$dayvisitsquery = mysql_query("SELECT * FROM settings WHERE name='today_visit'");
	while($element = mysql_fetch_array($dayvisitsquery))
	{ $numberofdayvisits = $element["value"]; }
	echo "Број посети дневно: ".$numberofdayvisits."<br>";
	
	$mounthvisitsquery = mysql_query("SELECT * FROM settings WHERE name='month_visit'");
	while($element = mysql_fetch_array($mounthvisitsquery))
	{ $numberofmounthvisits = $element["value"]; }
	echo "Број посети месечно: ".$numberofmounthvisits."<br>";
	
	$totalvisitsquery = mysql_query("SELECT * FROM settings WHERE name='total_visit'");
	while($element = mysql_fetch_array($totalvisitsquery))
	{ $numberoftotalvisits = $element["value"]; }
	echo "Вкупно посети: ".$numberoftotalvisits."<br>";
?>