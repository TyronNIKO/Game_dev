<?php
require $login_config;
?>
<section class="container">
	<div class="form-wrapper">
		<form class="form player-login" action="login-form.php">
			<div class="title text-uppercase font-orange">Войти в игру</div>
			<div class="label-group">
				<input type="text" id="email-login" name="email-login" class="form-control" placeholder="Логин" required>
			</div>
			<div class="label-group">
				<input type="password" id="passwordLogin" class="form-control" placeholder="Пароль" required>
			</div>
			<label class="checkbox   ">
				<input type="checkbox" class="" name="terms" value="">
				<span class="valid">L</span>
				<span>Я прочитал и принимаю <a target="_blank" href="/tos">пользовательское соглашение</a>.</span>
			</label>
			<div class="btn-wrapper">
				<button type="submit" name="login-button" class="btn bg-orange font-bold loginButton">Войти</button>
			</div>
			<div class=""><a href="/registraion/" title="Нет аккаунта?">Регистрация</a></div>
			<div class=""><a href="" title="Восстановить пароль">Напомнить пароль</a></div>
		</form>
		<form class="form reset-password" action="">
			<div class="title text-uppercase font-orange">Восстановить пароль</div>
			<div class="subtitle font-darkorange">Введите свой e-mail адрес указанный при регистрации. Мы вышлем вам письмо с инструкцией.</div>
			<div class="label-group">
				<input type="email" id="emailLogin" class="form-control" placeholder="Введите ваш e-mail" required>
			</div>
			<div class="btn-wrapper">
				<button type="submit" class="btn bg-orange font-bold reset-password">Восстановить</button>
			</div>
			<div class=""><a href="/registraion/" title="Войти в игру">Войти в игру</a></div>
			<div class=""><a href="/registraion/" title="Нет аккаунта?">Регистрация</a></div>
		</form>
	</div>
</section>