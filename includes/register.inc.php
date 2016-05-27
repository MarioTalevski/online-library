<?php
if (isset($_POST['register-button']))
{
	$username = strip_tags($_POST['register-username']);
	$password = strip_tags($_POST['register-password']);
	$avatar = "images/user/avatar.png";
	$repeatpassword = strip_tags($_POST['register-repeatpassword']);
	$firstname = strip_tags($_POST['register-firstname']);
	$lastname = strip_tags($_POST['register-lastname']);
	$startpoints = "0";
	$regdate = date("Y-m-d H:m:s");
	$access = "user";
		if ($username&&$password&&$firstname&&$lastname)
		{
			if (strlen($username)>25)
			{ echo "<div class='messageerror'>Корисничкото име е премногу големо!</div>"; }
			elseif (strlen($username)<6)
			{ echo "<div class='messageerror'>Корисничкото име е премногу мало!</div>"; }
			elseif (strlen($password)>25)
			{ echo "<div class='messageerror'>Лозинката е премногу голема!</div>"; }
			elseif (strlen($password)<6)
			{ echo "<div class='messageerror'>Лозинката е премногу мала!</div>"; }
			elseif ($username == $password)
			{ echo "<div class='messageerror'>Корисничкото име и лозинката не смеат да бидат исти!</div>"; }
			elseif ($firstname == $password or $lastname == $password)
			{ echo "<div class='messageerror'>Лозинката не смее да биди иста со вашето име или презиме!</div>"; }
			else
			{
				$query = mysql_query("SELECT * FROM users WHERE username = '$username'");
				$number_of_rows = mysql_num_rows($query);
				if ($number_of_rows!=0)
				{ echo "<div class='messageerror'>Внесеното корисничко име постој!</div>"; }
				else
				{
					if ($password == $repeatpassword)
					{
						$regquery = mysql_query ("INSERT INTO users VALUES ('', '$username', '$password', '$avatar', '$firstname', '$lastname', '$startpoints', '$regdate', '$access')");
						if ($regquery)
						{
							echo "<div class='messagesuccess'>Успешно се регистриравте!</div>";
							echo $refreshsite;
						}
						else
						{ echo "<div class='messageerror'>Обидетесе повторно зошто настана непредвидена грешка!</div>"; }
					}
					else
					{ echo "<div class='messageerror'>Внесете исти лозинки!</div>"; }
				}
			}
		}
		else
		{ echo "<div class='messageerror'>Пополнете ги сите полиња!</div>"; }
}
?>