<?php
include ("templates/search.tmp.php");

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$currentbook = ($page-1) * 10;
$booksquery = mysql_query("SELECT * FROM books ORDER BY id DESC LIMIT $currentbook, 10");
echo "
<table class='bookstable'>
  <tr id='trhead'>
    <td>Вид</td>
    <td>Име на книга</td>
    <td>Автор</td>
    <td>Превземи</td>
  </tr>
";
while($bookrow = mysql_fetch_array($booksquery))
{
	echo "<tr id='tr'>";
	echo "<td id='booktype'><img src='images/miniicons/books/" . $bookrow['type'] . ".png'></td>";
	echo "<td id='bookname'>" . $bookrow['name'] . "</td>";
	echo "<td id='bookauthor'>" . $bookrow['author'] . "</td>";
	echo "<td id='booklink'><a href='" . $bookrow['link'] . "' target='_blank'><img src='images/miniicons/books/download.png'></td>";
	echo "</tr>";
}
echo "</table>";
$booksquery = mysql_query("SELECT * FROM books ORDER BY id DESC");
$element = mysql_fetch_row($booksquery);
$totalrows = $element[0];
$totalpages = ceil($totalrows / 10);
if (isset($_GET["page"])) { $currentnumber = $_GET['page']; } else { $currentnumber = 1; }
$next = $currentnumber + 1;
$last = $currentnumber - 1;
echo "<div class='books-pages' align='center'>";
if ($currentnumber == 1)
{ echo "<a class='books-numberofpages'>Претходна</a> "; }
else
{ echo "<a class='books-numberofpages' href='index.php?site=books&page=".$last."'>Претходна</a> "; }
echo "<a class='books-numberofpages'>".$currentnumber."</a> ";
if ($currentnumber == $totalpages)
{  echo "<a class='books-numberofpages'>Следна</a> "; }
else
{ echo "<a class='books-numberofpages' href='index.php?site=books&page=".$next."'>Следна</a> "; }

echo "</div>";
?>