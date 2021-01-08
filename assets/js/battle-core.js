$(document).ready(function(){
	var player = {
		name: 'VOVA1',
		maxHealth: 500,
		currHealth: 500,
		atackPower: 50,
		defence: 5,
		energy: 0,
		speed: 50,
		unique: true
	};
	var enemy = {
		name: 'Пират Денчик',
		dificulty: 1,
		maxHealth: 1000,
		currHealth: 1000,
		atackPower: 20,
		defence: 1,
		energy: 0,
		speed: 20,
		reward: 100,
	};
	
	function loadPlayer(){
		$('div.player').append(`<div class="">Name: <span class="playername"> ${player.name} </span></div>
			<div id="playerProgress" class=""><div id="playerBar">Health: <span class="playerhealt">${player.currHealth}</span></div></div>
			<div class="">Atack: <span class="playeratack">${player.atackPower}</span></div>
			<div class="">Defence: <span class="playerdefence">${player.defence}</span></div>
			<div class="">Energy: <span class="playerenergy">${player.energy}</span></div>
			<div class="">Speed: <span class="playerspeed">${player.speed}</span></div>`
			);

	};
	function loadEnemy(){
		$('div.enemy').append(`<div class="">Name: <span class="enemyname">${enemy.name}</span></div>
		<div id="enemyProgress" class=""><div id="enemyBar">Health: <span class="enemyhealt">${enemy.currHealth}</span></div></div>
		<div class="">Atack: <span class="enemyatack">${enemy.atackPower}</span></div>
		<div class="">Defence: <span class="enemydefence">${enemy.defence}</span></div>
		<div class="">Energy: <span class="enemyenergy">${enemy.energy}</span></div>
		<div class="">Speed: <span class="enemyspeed">${enemy.speed}</span></div>`
		);
	};
	function loadControls(){
		$('.fight').addClass('active');

	};

	loadPlayer();
	loadEnemy();
	loadControls();

	function updateRound(){
		$('div.player .playerhealt').html(player.currHealth);
		$('div.player .playerenergy').html(player.energy);
		$('div.enemy .enemyhealt').html(enemy.currHealth);
		$('div.enemy .enemyenergy').html(enemy.energy);

		for (var i=0; i < enemy.length; i++) {
			console.log(enemy[i]);
		}
	};
	var fightStatus = true;
	var roundResult;
	var atackResultPlayer;
	var atackResultEnemy;
	
	function basicAttack(){
		function checkEnergyPlayer(){
			if (player.energy >= 100){
				atackResultPlayer = player.atackPower + player.energy - enemy.defence;
				player.energy = player.energy - player.energy;
				isSpecial = '<span class="special">'+atackResultPlayer+'</span>';
				logResultPlayer = '<p>' +player.name+ ' нанес : '+isSpecial+ ' урона по ' +enemy.name+', и зарядил: '+player.speed+' энергии.</p>';
				}else if(player.energy < 100){
					atackResultPlayer = player.atackPower - enemy.defence;
					player.energy = player.energy + player.speed;
					logResultPlayer = '<p>' +player.name+ ' нанес : '+atackResultPlayer+ ' урона по ' +enemy.name+', и зарядил: '+player.speed+' энергии.</p>';
			}
		}
		function checkEnergyEnemy(){
			if (enemy.energy >= 100){
				atackResultEnemy = enemy.atackPower + enemy.energy - player.defence;
				enemy.energy = enemy.energy - enemy.energy;
				isSpecial = '<span class="special">'+atackResultEnemy+'</span>';
				logResultEnemy = '<p>' +enemy.name+ ' нанес : '+isSpecial+ ' урона по '+player.name+ ' , и зарядил: '+enemy.speed+' энергии. </p>';
				}else if(player.energy < 100){
					atackResultEnemy = enemy.atackPower - player.defence;
					enemy.energy = enemy.energy + enemy.speed;
					logResultEnemy = '<p>' +enemy.name+ ' нанес : '+atackResultEnemy+ ' урона по '+player.name+ ' , и зарядил: '+enemy.speed+' энергии. </p>';
			}
		}

		if (enemy.currHealth < 0) {
			fightStatus = false;
			$('.fight.active').removeClass('.active').addClass('non-active');
			$('.battle-status-win').addClass('visible');
		} else if (player.currHealth < 0) {
			fightStatus = false;
			$('.fight.active').removeClass('.active').addClass('non-active');
			$('.battle-status-lose').addClass('visible');
		} else {
			checkEnergyPlayer();
			checkEnergyEnemy();

			enemy.currHealth = enemy.currHealth - atackResultPlayer;
			player.currHealth = player.currHealth - atackResultEnemy;
			function moveBars(){
				playerBarWidth = player.currHealth / player.maxHealth * 100;
				$('.battle-interface #playerProgress #playerBar').css('width',playerBarWidth+'%');
				enemyBarWidth = enemy.currHealth / enemy.maxHealth * 100;
				$('.battle-interface #enemyProgress #enemyBar').css('width',playerBarWidth+'%');
			};
			moveBars();
		}		

		$('p.logentry').append(logResultPlayer, logResultEnemy);
		updateRound();
	};
	
		function fightRepeat(){		
			$('.fight.active').on('click', function(){
				basicAttack();
			});
		}
		fightRepeat();
});