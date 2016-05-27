<div class='register'>
	<div class='register-left'>
    	<?php include ("includes/register.inc.php"); ?>
		<form action='index.php?site=register' method='post'>
        <table>
		<tr><td width="175"><p>Име:</p></td><td><input width="320" name='register-firstname' value='<?php echo $rfirstname ?>' type='text' /></td></tr>
		<tr><td width="175"><p>Презиме:</p></td><td><input name='register-lastname' value='<?php echo $rlastname ?>' type='text' /></td></tr>
		<tr><td width="175"><p>Корисничко име:</p></td><td><input name='register-username' value='<?php echo $rusername ?>' type='text' /></td></tr>
        <tr><td width="175"><p>Лозинка:</p></td><td><input name='register-password' type='password' /></td></tr>
		<tr><td width="175"><p>Потврди лозинка:</p></td><td><input name='register-repeatpassword' type='password' /></td></tr>
        </table>
        <div align='center'><input class='register-button' name='register-button' type='submit' value='Зачлени се!' /></div>
        </form>
	</div>
	<div class='register-right'>
		<div class="widget-title">Статистика</div>
        <div class="widget-content">
        	<?php include ("includes/statistics.inc.php"); ?>
        </div>
	</div>
</div>