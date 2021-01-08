<?php

require $_SERVER["DOCUMENT_ROOT"].'/db.php';

$site_url = "http://local.game-dev/";
$faviconicon = "/assets/img/favicon.jpg";
$site_title = 'Demi human 2121';
$site_language = 'ru';
$scriptloader = $_SERVER["DOCUMENT_ROOT"].'/includes/scriptloader.php';
$cssloader = $_SERVER["DOCUMENT_ROOT"].'/includes/cssloader.php';
$slider = $_SERVER["DOCUMENT_ROOT"].'/content/slider.php';
/*USER*/
$user_status = '9';
$user_nicename = 'Default name';


/*GAME*/

$reg_config = $_SERVER["DOCUMENT_ROOT"].'/registration/registration-config.php';
$reg_form = $_SERVER["DOCUMENT_ROOT"].'/registration/registration-form.php';
$login_config = $_SERVER["DOCUMENT_ROOT"].'/registration/login-config.php';
$login_form = $_SERVER["DOCUMENT_ROOT"].'/registration/login-form.php';

$game_select_char_page = $_SERVER["DOCUMENT_ROOT"].'/game/game-select-char.php';

$server_time = date('H:m:s m d Y');