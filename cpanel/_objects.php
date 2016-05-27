<?php
class message {
	function errordb1 () { echo "<div class='important-message'><div id='title'><div id='titletext'>Грешка</div></div><div id='message'>Не можи да се поврзи со базата на податоци!</div></div>"; }
	function errordb2 () { echo "<div class='important-message'><div id='title'><div id='titletext'>Грешка</div></div><div id='message'>Базата на податоци не е пронајдена!</div></div>"; }
}

class reconnect {
	function reconnecttodashboard () {echo "<meta http-equiv='refresh' content='1;url=index.php' />";}
	function reconnect () {echo "<meta http-equiv='refresh' content='1;url=' />";}
}
?>
