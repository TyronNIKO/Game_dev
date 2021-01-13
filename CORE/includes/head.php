<?php
session_start();
echo '<!DOCTYPE html>';
echo '<html lang='.$site_language.'>';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="content-type" content="text/html;charset=UTF-8">';
echo '<title>'.$site_title.'</title>';
echo '<link rel="icon" type="image" href="'.$faviconicon.'">';
echo '<link href=\'https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;subset=cyrillic\' rel=\'stylesheet\' type=\'text/css\'>';

require $scriptloader;
require $cssloader;
echo '</head>';
if($user_status == '9'){
	require $_SERVER["DOCUMENT_ROOT"].'/includes/adminpanel.php';
}