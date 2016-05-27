<div class="widget" style="margin-top:0px;">
	<div id="usertitle">
		<div id="usertitletext"><?php echo $_SESSION['user_username']; ?></div>
	</div>
	<div id="usercontent" align="center">
		<table border="0" width="270" style="margin-top:5px; margin-bottom:5px;">
		<tr>
			<td width="100" align="center">
				<img width="100" height="160" src="<?php echo $_SESSION['user_avatar']; ?>" />
				<a href="index.php?site=accountsettings"><img style="margin-top:5px;" src="images/style/icons/settings.png" /></a>
				<a href="index.php?site=logout"><img style="margin-top:5px;" src="images/style/icons/logout.png" /></a>
			</td>
			<td width="170">
				<?php echo "Име: ".$_SESSION['user_firstname']; ?></br>
				<?php echo "Презиме: ".$_SESSION['user_lastname']; ?></br>
				<?php echo "Дата на регистрација:</br>".$_SESSION['user_regdate']; ?></br></br>
				<a href="index.php?site=resetpassword">Промени лозинка</a> </br>
				<a href="index.php?site=mybooks">Мој книги</a>
			</td>
		</tr>
		</table>
	</div>
</div>




<div class="widget">
	<div id="notetitle">
		<div id="notetitletext">Забелешка</div>
	</div>
	<div id="notecontent">
		
	</div>
</div>





<div class="widget">
	<div id="statistictitle">
		<div id="statistictitletext">Статистика</div>
	</div>
	<div id="statisticcontent">
		<p>Корисници: <?php $usersquery = mysql_query("SELECT * FROM users"); $numberofusers = mysql_num_rows($usersquery); echo "<b>".$numberofusers."</b>"; ?></p>
		<p>Книги: <?php $bookssquery = mysql_query("SELECT * FROM books"); $numberofbooks = mysql_num_rows($bookssquery); echo "<b>".$numberofbooks."</b>"; ?></p>
		<p>Посети дневно: <?php $dayvisitsquery = mysql_query("SELECT * FROM settings WHERE name='today_visit'"); while($element = mysql_fetch_array($dayvisitsquery)) { $numberofdayvisits = $element["value"]; } echo "<b>".$numberofdayvisits."</b>"; ?></p>
		<p>Посети месечно: <?php $monthvisitsquery = mysql_query("SELECT * FROM settings WHERE name='month_visit'"); while($element = mysql_fetch_array($monthvisitsquery)) { $numberofmonthvisits = $element["value"]; } echo "<b>".$numberofmonthvisits."</b>"; ?></p>
		<p>Вкупно посети: <?php $totalvisitsquery = mysql_query("SELECT * FROM settings WHERE name='total_visit'"); while($element = mysql_fetch_array($totalvisitsquery)) { $numberoftotalvisits = $element["value"]; } echo "<b>".$numberoftotalvisits."</b>"; ?></p>
	</div>
</div>