<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_POST["reg_password"] === $_POST["reg_confirmpassword"]) {
		$username = $mysqli->real_escape_string($_POST["reg_username"]);
		$email = $mysqli->real_escape_string($_POST["reg_email"]);
		$password = md5($_POST["reg_password"]);

		$sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
		 echo $username, $email, $password;
		if($mysqli->query($sql) === true) {
			$_SESSION['message'] = 'Регистрация успешна!';
		} else {
			$_SESSION['message'] = 'Регистрация не удалась!';
		}
	} else {
		$_SESSION['message'] = "Пароли не совпадают!";
	}
}
?>
<script>
	console.log($username, $email, $password);
</script>
<div class="session-message"><?php echo $_SESSION['message'];?></div>
<section class="container">
	<div class="form-wrapper">
		<div class="h1-form-title">Новенький? Регистрируйся</div>
		<form class="form registrationPlayer" action="form-reg-and-login.php" enctype="multipart/form-data" method="post">
			<input type="text" id="username" class="form-control" placeholder="Введи имя" name="reg_username" autocomplete="on" required>
			<label for="username">Введи имя</label>
			<input type="email" id="email" class="form-control" placeholder="Введи эмеил" name="reg_email" autocomplete="on" required>
			<label for="email">Введи эмеил</label>
			<input type="password" id="password" class="form-control" placeholder="Введи пароль" name="reg_password" autocomplete="off" required>
			<label for="password">Введи пароль</label>
			<input type="password" id="passwordRepeat" class="form-control" placeholder="Повтори пароль" name="reg_confirmpassword" autocomplete="off" required>
			<label for="passwordRepeat">Повтори пароль</label>
			<button type="submit" class="btn bg-yellow font-bold registrationButton">Регистрация</button>
		</form>
		<div class="h1-form-title">Уже есть аккаунт? Войти</div>
		<form class="form loginPlayer" action="form-reg-and-login.php">
			<input type="email" id="emailLogin" class="form-control" placeholder="Введи эмеил" required>
			<label for="emailLogin">Введи эмеил</label>
			<input type="password" id="passwordLogin" class="form-control" placeholder="Введи пароль" required>
			<label for="passwordLogin">Введи пароль</label>
			<button type="submit" class="btn bg-yellow font-bold loginButton">Войти</button>
		</form>
	</div>
</section>