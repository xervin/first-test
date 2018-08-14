<div class="outer">
	<div align='center'>
		<h1>Создание нового пользователя</h1>
		<h2 id="info">&nbsp</h2>
		<form method="POST" id="addUser" action="script/reg.php">
			<p><label>ФИО:<br>
				<input name="uname" size="30" type="text" value="">
			</label></p>
			<p><label>Логин:<br>
				<input name="ulogin" size="30" type="text" value="">
			</label></p>
			<p><label>Ваш email:<br>
				<input name="uemail" size="30" type="email" value="">
			</label></p>
			<p><label>Роль:<br>
				<input name="urole" type="radio" value="admin">admin
				<input name="urole" type="radio" value="user" checked>user
			</label></p>
			<p><label>Пароль:<br>
				<input name="upass" size="30" type="password" value="">
			</label></p>
			<p><input type="submit" value="Добавить пользователя" /></p>
		</form>
	</div>
</div>
<script src="js/ajax.js"></script>