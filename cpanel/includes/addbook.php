<form action="" method="post">
<table width="620">
	<tr>
		<td width="310">
			<h1>Име</h1>
			<input name="bookname" type="text" />
			<h1>Автор</h1>
			<input name="bookauthor" type="text" />
			<h1>Вид</h1>
			<select name="booktype">
            <?php
				$booktypessquery = mysql_query("SELECT * FROM booktypes ORDER BY id DESC");
				while($booktypesrow = mysql_fetch_array($booktypessquery))
				{echo "<option value=".$booktypesrow['value'].">".$booktypesrow['name']."</option>";}
			?>
            </select>
		</td>
		<td width="310">
			<h1>Линк</h1>
			<input name="booklink" type="text" />
			<h1>Опис</h1>
			<textarea name="bookdescription"></textarea>
		</td>
	</tr>
</table>
<div align="center"><input class="buttonblue" name="bookadd" type="submit" value="Додај книга" /><input class="buttonred" type="reset" value="Избриши" /></div>
</form>
