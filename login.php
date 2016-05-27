<?php
if (isset($_POST['login-button']))
{
	$username = $_POST["login-username"];
	$password = $_POST["login-password"];
	if ($username&&$password)
	{
		$logquery = mysql_query("SELECT * FROM users WHERE username = '$username'");
		$number_of_rows = mysql_num_rows($logquery);
		if ($number_of_rows!=0)
		{
			while ($db_row = mysql_fetch_assoc ($logquery))
			{
				$dbusername = $db_row['username'];
				$dbuserid = $db_row['id'];
				$dbpassword = $db_row['password'];
				$dbavatar = $db_row['avatar'];
				$dbfirstname = $db_row['firstname'];
				$dblastname = $db_row['lastname'];
				$dbregdate = $db_row['regdate'];
				$dbpoints = $db_row['points'];
				
				$_SESSION['username'] = $dbusername;
				$_SESSION['userid'] = $dbuserid;
				$_SESSION['avatar'] = $dbavatar;
				$_SESSION['firstname'] = $dbfirstname;
				$_SESSION['firstname'] = $dbfirstname;
				$_SESSION['lastname'] = $dblastname;
				$_SESSION['regdate'] = $dbregdate;
				$_SESSION['points'] = $dbpoints;
			}
			if ($username==$dbusername && $password==$dbpassword)
			{
				echo "<div class='messagesuccess'>Успешно се логиравте!</div>";
				
			}
			else
			{
			 session_destroy ();
			 echo "<div class='messageerror'>Погрешна лозинка!</div>";
			}
			
		}
		else
		{
		 echo "<div class='messageerror'>Корисничкото име не е пронајдено!</div>";
		}
	}
	else
	{ echo "<div class='messageerror'>Ве молиме внесете корисничко име и лозинка!</div>"; }
echo $refreshsite;
}
include ("home.php");
?>