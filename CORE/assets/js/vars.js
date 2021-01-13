var playerData = {
	playerEmail: '',
	playerPassword: '',
	playerName: '',
};
var devMode = '0';

function upDate() {
	if (localStorage['fieldEmail'] !== undefined && localStorage['fieldEmail'] !== false) {
		playerData.playerEmail = localStorage['fieldEmail']
	} else {
		playerData.playerEmail = parseInt(0);
	}
	if (localStorage['fieldPassword'] !== undefined && localStorage['fieldPassword'] !== false) {
		playerData.playerPassword = localStorage['fieldPassword']
	} else {
		playerData.playerPassword = parseInt(0);
	}
	if (localStorage['fieldName'] !== undefined && localStorage['fieldName'] !== false) {
		playerData.playerName = localStorage['fieldName']
	} else {
		playerData.playerName = '';
	}
	if (localStorage['devModeLocal'] !== undefined && localStorage['devModeLocal'] !== false) {
		devMode = localStorage['devModeLocal']
	} else {
		devMode = parseInt(0);
	}
	console.log('playerData', playerData);
}
upDate();

var gameIdList = {
	loginadminButtonId: document.getElementById('loginadmin'),
	logoutButtonId: document.getElementById('logout'),
};
console.log('gameIdList', gameIdList);
var gameClassList = {
	newPlayerClass: document.getElementsByClassName('newPlayer')[0],
	registeredPlayerClass: document.getElementsByClassName('registeredPlayer')[0],
	submitButtonStartClass: document.getElementsByClassName('submitButtonStart')[0],
	playerNameClass: document.getElementsByClassName('playerName')[0],
	submitButtonNameClass: document.getElementsByClassName('submitButtonName')[0],
	spanNameClass: document.getElementsByClassName("name")[0],
};
console.log('gameClassList', gameClassList);

// var checkThisOut = prompt('check this','');
// 	if (checkThisOut == 1) {
// 	localStorage['devModeLocal'] = false;
// 	console.error(localStorage['devModeLocal'])
// }
function checkDev(devMode) {
	console.log('Checking is started: ' + devMode);
	gameIdList.loginadminButtonId.addEventListener('click', function() {
		//проверяем если админ снова хочет войти - говорим что уже админ
		if (devMode == 1) {
			console.error('Ты уже и так Админ!')
			return false;
		}
		//проверяем если не админ хочет войти - входим в админку
		if (devMode == 0 || devMode !== true) {
			var resultAdmin = prompt('Ты точно Админ?! Ану скажи пароль:', '');
			if (resultAdmin == 1) {
				localStorage['devModeLocal'] = parseInt(1);
				console.log('Set devMode to ' + devMode);
				devModeTrue();
				console.error('Привет, Админ');
			} else if (resultAdmin == null || resultAdmin == '') {
				console.error('Не ври! Ты не админ!');
			} else {
				console.error('Ну ок!');
			}
		}
		upDate();
	});
	gameIdList.logoutButtonId.addEventListener('click', function() {
		//проверяем если админ - выходим из админки
		if (devMode == 1) {
			var resultLogoutAdmin = confirm('Выйти из админки?');
			if (resultLogoutAdmin == true) {
				console.log('Check devmode is true: ' + devMode);
				localStorage['devModeLocal'] = parseInt(0);
				console.log('Set devMode to ' + devMode)
				devModeFalse(devMode);
			}
		} //проверяем если не админ хочет выйти - очищаем кэш
		else if (devMode == 0 || devMode !== true) {
			console.log('Check devmode is not 0 or not true: ' + devMode)
			var resultLogout = confirm('Очищаем кэш?');
			if (resultLogout == true) {
				localStorage.clear();
				console.error('Кэш очистили!');
				document.location.reload(true);
			} else(
				console.error('Ну и правильно!')
			)
			devModeFalse(devMode);
		}
		upDate();

	});
};
//isDev();

function devModeFalse(devMode) {
	console.log('Is devMode false? ' + devMode);
	console.log('Is name founded? ' + gameClassList.spanNameClass);
	//проверяем если хранилище уже содержит данные
	if ((playerData.playerEmail !== 0 && playerData.playerEmail !== '') && (playerData.playerPassword !== 0 && playerData.playerPassword !== '')) {
		gameClassList.newPlayerClass.style.display = 'none';
		gameClassList.playerNameClass.style.display = 'block';
	};
	//проверяем если хранилище уже содержит данные и ввели имя
	if ((playerData.playerEmail !== 0 && playerData.playerEmail !== '') && (playerData.playerPassword !== 0 && playerData.playerPassword !== '') && (playerData.playerName !== 0 && playerData.playerName !== '')) {
		gameClassList.playerNameClass.style.display = 'none';
		gameClassList.registeredPlayerClass.style.display = 'block';
	};

	gameClassList.submitButtonStartClass.addEventListener('click', function() {
		var fieldEmail = document.getElementById("email").value;
		var fieldPassword = document.getElementById("password").value;
		console.log('Email ' + fieldEmail, 'Pass ' + fieldPassword);

		localStorage['fieldEmail'] = fieldEmail;
		localStorage['fieldPassword'] = fieldPassword;
		upDate();
		if ((playerData.playerEmail !== 0 && playerData.playerEmail !== '') && (playerData.playerPassword !== 0 && playerData.playerPassword !== '')) {
			gameClassList.newPlayerClass.style.display = 'none';
			gameClassList.playerNameClass.style.display = 'block';
			console.log('ok 1')
		} else {
			console.log('Not ok 1')
			gameClassList.newPlayerClass.style.display = 'block';
			gameClassList.playerNameClass.style.display = 'none';
			console.error('Введи данные!')
		}

	});

	gameClassList.submitButtonNameClass.addEventListener('click', function() {
		var fieldName = document.getElementById("name").value;
		console.log('Name' + fieldName);
		localStorage['fieldName'] = fieldName;
		upDate();
		gameClassList.spanNameClass.innerHTML = playerData.playerName;
		if ((playerData.playerEmail !== 0 && playerData.playerEmail !== '') && (playerData.playerPassword !== 0 && playerData.playerPassword !== '') && (playerData.playerName !== 0 && playerData.playerName !== '')) {
			gameClassList.playerNameClass.style.display = 'none';
			gameClassList.registeredPlayerClass.style.display = 'block';
			console.log('ok 2')
		} else {
			console.log('Not ok 2')
			gameClassList.playerNameClass.style.display = 'block';
			gameClassList.registeredPlayerClass.style.display = 'none';
			console.error('Введи имя!')
		}
	});
};

function devModeTrue() {
	console.log('Is devMode true? ' + devMode);
	//проверяем если хранилище уже содержит данные
	//if(playerData.playerEmail && playerData.playerPassword) {
	gameClassList.newPlayerClass.style.display = 'block';
	gameClassList.playerNameClass.style.display = 'block';
	//}
	//проверяем если хранилище уже содержит данные и ввели имя
	//if(playerData.playerEmail && playerData.playerPassword && playerData.playerName) {
	gameClassList.playerNameClass.style.display = 'block';
	gameClassList.registeredPlayerClass.style.display = 'block';

	//}
	gameClassList.submitButtonStartClass.addEventListener('click', function() {
		var fieldEmail = document.getElementById("email").value;
		var fieldPassword = document.getElementById("password").value;
		console.log('Email' + fieldEmail, 'Pass' + fieldPassword);

		localStorage['fieldEmail'] = fieldEmail;
		localStorage['fieldPassword'] = fieldPassword;
		upDate();
		//if(playerData.playerEmail && playerData.playerPassword) {
		gameClassList.newPlayerClass.style.display = 'block';
		gameClassList.playerNameClass.style.display = 'block';
		//}
	});
	gameClassList.submitButtonNameClass.addEventListener('click', function() {
		var fieldName = document.getElementById("name").value;
		console.log('Name ' + fieldName);
		localStorage['fieldName'] = fieldName;
		upDate();
		gameClassList.spanNameClass.innerHTML = playerData.playerName;
		//if(playerData.playerEmail && playerData.playerPassword && playerData.playerName) {
		gameClassList.playerNameClass.style.display = 'block';
		gameClassList.registeredPlayerClass.style.display = 'block';

		//}
	});

}
function startRenderGame(devMode) {
	if (devMode == 1) {
		devModeTrue();
	} else {
		devModeFalse();
	}
	console.log('Game is started');
};
startRenderGame(devMode);