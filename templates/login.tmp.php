<?php
$useravatar = $_SESSION['avatar'];
$userfirstname = $_SESSION['firstname'];
$userpoints = $_SESSION['points'];
if ($_SESSION['username'])
{
 echo "
 <div class='header-logged'>
 <div id='header-logged-left' align='center'>
  <img width=100 height=100 src='$useravatar' />
  <form action='index.php?site=logout' method=POST><input name='logout-button' type='submit' value='Одлогирај се!' /></form>
 </div>
 <div id='header-logged-right'>
 Добредојде, $userfirstname
 <br /><br />
  Промени информации<br />Промени аватар<br />Види профил
  <br /><br /><br />
   <div align='right'><em>Ти имаш $userpoints поени!</em></div>
 </div>
 </div>
 ";
}
else
{
echo "<form action='index.php?site=login' method='post'>
	<div style='margin:auto; width:280px;' align='center'>
    	<p>Корисничко име:</p>
    	<input name='login-username' type='text' />
        <p>Лозинка:</p>
        <input name='login-password' type='password' /><br />
        <input id='submitbutton' name='login-button' type='submit' value='Логирај се!' />
	</div>
</form>";
}
?>