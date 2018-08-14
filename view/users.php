<div align="center">
<form action="index.php" method="GET">
			<input name="sort" type="radio" value="name">По имени &nbsp
			<input name="sort" type="radio" value="dateCreated">По дате &nbsp
			<input type="submit" value="Сортировать">
</form>
</div>
<table width='50%' align="center" border=0>
	<tr bgcolor="BOBOBO"  align='center'>
		<td width='60%' colspan='2'>ФИО</td>
		<td width='10%'>Login</td>
		<td width='10%'>Дата регистрации</td>
	</tr>
	<tr bgcolor="BOBOBO">
		<td align="center" colspan="4"><div id="info">&nbsp</div></td>
	</tr>
	<?php require_once("script/viewUsers.php"); ?> 
</table>

<script src="js/ajax.js"></script>
