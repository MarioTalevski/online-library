<?php
if (isset($_GET['action']))
{
	if ($_GET['action'] == "edit")
	{ include ("inluces/books-edit.php"); }
	elseif ($_GET['action'] == "delete")
	{ include ("includes/books-delete.php"); }
	else
	{ include ("error.php"); }
}
else
{
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$currentbook = ($page-1) * 10;
$booksquery = mysql_query("SELECT * FROM books ORDER BY id DESC LIMIT $currentbook, 10");
echo "
<div class='books'>
<div id='title'><div id='titletext'>Книги</div></div>
<div id='content'>
<table class='bookstable'>
";
while($bookrow = mysql_fetch_array($booksquery))
{
	echo "<tr id='tr'>";
	echo "<td width='60'>Бр. ".$bookrow['id']."</td>";
	echo "<td>" . $bookrow['name'] . "</td>";
	echo "<td>" . $bookrow['author'] . "</td>";
	echo "<td width='100'>
	<a href='index.php?site=books&action=edit&id=".$bookrow['id']."'><img src='images/style/icons/edit.png' /></a>
	<a href='index.php?site=books&action=delete&id=".$bookrow['id']."'><img src='images/style/icons/delete.png' /></a>
	</td>";
	echo "</tr>";
}
echo "</table>";
$booksquery2 = mysql_query("SELECT * FROM books ORDER BY id DESC");
$element = mysql_fetch_row($booksquery2);
$totalrows = $element[0];
$totalpages = ceil($totalrows / 10);
echo "</div><div class='books-pages' align='center'>";
for ($i=1; $i<=$totalpages; $i++)
{
   echo "<a class='books-numberofpages' href='index.php?site=books&page=".$i."'>".$i."</a> ";
}
echo "</div></div>";
if (isset($_POST['bookadd']))
{
$name = $_POST['bookname'];
$author = $_POST['bookauthor'];
$type = $_POST['booktype'];
$link = $_POST['booklink'];
$description = $_POST['bookdescription'];
$date = date("Y-m-d H:m:s");
	if ($name == "" || $author == "" || $type == "" || $link == "" || $description == "")
	{ echo "<div class='errormessage'>Пополнете ги сите полиња!</div>"; }
	else
	{
		mysql_query("INSERT INTO books VALUES ('', '$type', '$name', '$author', '$link', '$description', '$date')");
		echo "<div class='successmessage'>Успешно ја додадовте книгата!</div>"; 
		$reconnectobject = new reconnect;
		$reconnectobject -> reconnect ();
	}
}
echo "
	<div class='addbook'>
	<div id='title'><div id='titletext'>Додај книга</div></div>
	<div id='content'>
	";
	include ("includes/addbook.php");
echo "</div></div>";
}
?>