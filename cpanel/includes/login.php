<?php
echo "
<div class='loginbox'>
	<div id='title'><div id='titletext'>Логирај се!</div></div>";
if (isset($_POST['loginsubmit']))
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
				$dbuserid = $db_row['id'];
				$dbusername = $db_row['username'];
				$dbpassword = $db_row['password'];
				$dbfirstname = $db_row['firstname'];
				$dblastname = $db_row['lastname'];
				$dbavatar = $db_row['avatar'];
				$dbregdate = $db_row['regdate'];
				$dbpoints = $db_row['points'];
				$dbstatus = $db_row['status'];
			
				$_SESSION['user_id'] = $dbuserid;
				$_SESSION['user_username'] = $dbusername;
				$_SESSION['user_firstname'] = $dbfirstname;
				$_SESSION['user_lastname'] = $dblastname;
				$_SESSION['user_avatar'] = $dbavatar;
				$_SESSION['user_regdate'] = $dbregdate;
				$_SESSION['user_points'] = $dbpoints;
				$_SESSION['user_status'] = $dbstatus;
			}
			if ($username==$dbusername && $password==$dbpassword)
			{
				if ($_SESSION['user_status'] == 'admin')
				{
					echo "<div class='successmessage'>Успешно се логиравте!</div>";
					session_start();
					$reconnectobject = new reconnect;
					$reconnectobject -> reconnecttodashboard ();
				}
				else
				{
					echo "<div class='errormessage'>Овај корисник не е администратор!</div>";
				}
			}
			else
			{
			 echo "<div class='errormessage'>Погрешна лозинка!</div>";
			}
			
		}
		else
		{
		 echo "<div class='errormessage'>Корисничкото име не е пронајдено!</div>";
		}
	}
	else
	{ echo "<div class='errormessage'>Ве молиме внесете корисничко име и лозинка!</div>"; }
echo $refreshsite;
}
else
{
echo "<div class='infomessage'>Добредојдовте во системот за менаџирање!</div>";
}
echo "
    <div id='content'>
    <form method='post' action=''>
    	<input id='inputuser' name='login-username' value='$username' type='text' />
    	<input id='inputpassword' name='login-password' value='$password' type='password' />
        <input class='buttonblue' id='button' name='loginsubmit' value='Логирај се!' type='submit' />
    </form>
    </div>
</div>
";
?>