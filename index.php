<?php include ("cpanel/_database.php"); ?>
<?php include ("_settings.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>naslov</title>
	<meta name="keywords" content="zboroj za pronaogane" />
	<meta name="description" content="Официјална веб страна на ..." />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/objects.js"></script>
</head>

<body>
	<!-- HEADER -->
<div class="header">
	<div class="header-login">
       	<div id="panel-content">
       		<?php include ("templates/login.tmp.php"); ?>
        </div>
        <div id="panel-button"><a href="#">Корисник</a></div>
    </div>
        <div class="header-logo"></div>
        <ul class="navigation">
			<li><a href="index.php?site=home">Почетна</a></li>
			<li><a href="index.php?site=books">Книги</a></li>
			<li><a href="index.php?site=<?php echo $menuuser; ?>"><?php echo $menuusertext; ?></a></li>
			<li><a href="index.php?site=contact">Контакт</a></li>
		</ul>
</div>
    
	<!-- WRAPPER -->
	<div class="wrapper-top"></div>
    <div class="wrapper-content">
		<?php
			if(!isset($site)) $site="home";
			$invalide = array('\\','/','/\/',':','.');
			$site = str_replace($invalide,' ',$site);
			if(!file_exists($site.".php")) $site = "error";
			include($site.".php");
		?>
	</div>
    <div class="wrapper-bottom"></div>
    
	<!-- FOOTER -->
	<div class="footer">
		<div id="left">
        	Biblioteka.mk &copy; Сите права се задржани.<br /><p>Почетна | Маркетинг | За нас</p>
        </div>
        <div id="right" align="right">
        	<img src="images/style/footer-facebook.png" />
            <img src="images/style/footer-email.png" />
        </div>
	</div>
</body>
</html>