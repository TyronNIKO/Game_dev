<!-- Welcome page -->
<section class="container section block_3 registeredPlayer">
	<div class="greetings text-center">
		<p>Привет, <span class="name"><?php echo $user_name;?></span>!</p>
		<p>Выбери персонажа</p>
	</div>
	<div class="characters_select">
		<div class="char-box">
			<p>Имя персонажа <span class="character-name">Цири</span>!</p>
			<div class="img-wrapper character-avatar">
				<img src="/assets/img/Ciri_avatar.jpg" alt="Аватар">
			</div>
			<p>Уровень <span class="character-level">0</span></p>
			<p>Мощь <span class="character-power">0</span></p>
		</div>
		<div class="char-box new">Создать новый персонаж</div>
	</div>
	<div class="playground">
		<div class="game-menu"></div>
	</div>
</section>