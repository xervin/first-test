<div class="menu">
	<div><b border='1'>
		<?php echo $_SESSION['login']."[".$_SESSION['role']."] </b> <a align='right' href=\"index.php?editUser=".$_SESSION['login']." \" >(ред.)</a>"; ?> 
		&nbsp | &nbsp <a href="script/logout.php">Выход</a>
		&nbsp | &nbsp <a href="index.php">Пользователи</a>
		<?php 
		if ($_SESSION['role']=='admin') {
		echo "&nbsp | &nbsp <a href=\"index.php?createUser=".$_SESSION['login']." \">Добавить пользователя</a>";
		}
		?>
		</div>
</div>