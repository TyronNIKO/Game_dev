<?php
require $reg_config;
?>
<div class="session-message"><?php if($_SESSION['message']) {echo 'Message: '.$_SESSION['message'];}?></div>
<section class="container">
	<div class="form-wrapper">
		<form class="form registrationPlayer" action="registration-from.php" enctype="multipart/form-data" method="post">
			<div class="h1-form-title">Новенький? Регистрируйся</div>
			<div class="label-group">
				<label for="reg_login" class="text-uppercase font-orange">Логин</label>
				<input type="text" id="username" class="form-control" placeholder="Введи логин" name="reg_login" autocomplete="on" required>
			</div>
			<div class="label-group">
				<label for="reg_email">Email</label>
				<input type="email" id="email" class="form-control" placeholder="Ваш реальный эмеил" name="reg_email" autocomplete="on" required>
			</div>
			<div class="label-group">
				<label for="reg_password">Пароль</label>
				<input type="password" id="password" class="form-control" placeholder="Минимум 8 цифр" name="reg_password" autocomplete="off" required>
			</div>
<!-- 			<div class="label-group">
				<label for="reg_confirmpassword">Повтори пароль</label>
				<input type="password" id="passwordRepeat" class="form-control" placeholder="Повтори пароль" name="reg_confirmpassword" autocomplete="off" required>
			</div> -->
			<button type="submit" class="btn bg-orange font-bold registrationButton">Регистрация</button>
		</form>
	</div>
</section>