<?php
if(isset($_SESSION['username']))
{echo "<div class='messageinfo'>Сесијата постои!</div>";}
else
{echo "<div class='messageinfo'>Сесијата непостои!</div>";}

?>