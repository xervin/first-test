<div class="menu">
	<div>Вы вошли как <?php echo $_SESSION['login']."(".$_SESSION['role'].") <a align='right' href=\"index.php?editUser=".$_SESSION['login']." \" >(ред.)</a>"; ?> &nbsp | &nbsp<a href="script/logout.php">Выход</a>&nbsp | &nbsp <a href="index.php">Пользователи</a></div>
</div>