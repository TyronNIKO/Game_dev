<body id="game_interface" class="load">
	if newPLayer
	show registration
	<?php include_once $registration ?>
	endif
	<!-- game news block -->
	<section class="container lastnews">
		<h2>Свежие новости проекта</h2>
		<ul>
			<li class="hotest-news">Карточка Гарячие новости на всю ширину блока картинкой с текстом при хувере</li>
			<li>обычная карточка на 1/3 размера блока картинкой с текстом при хувере</li>
			<li>обычная карточка на 1/3 размера блока картинкой с текстом при хувере</li>
			<li>обычная карточка на 1/3 размера блока картинкой с текстом при хувере</li>
		</ul>
	</section>
	<!-- end game news block -->
	if registeredPLayer
	show gameInterface
	<section class="container section block_3 registeredPlayer">
		<div class="greetings text-center">
			<p>Привет, <span class="name">User</span>!</p>
			<p>Выбери персонажа</p>
		</div>
		<div class="characters_select">
			<div class="char-box">
				<p>Имя персонажа <span class="character-name">Цири</span>!</p>
				<div class="img-wrapper character-avatar">
					<img src="./assets/img/Ciri_avatar.jpg" alt="Аватар">
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
	endif
	<?php include_once $footer ?>
</body>