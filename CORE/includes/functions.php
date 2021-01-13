<?php session_start();

$_SESSION['message']= '';
$t = microtime(TRUE); 
$mysqli = new mysqli('127.0.0.1','root','123456','game_dev');
echo microtime(TRUE)-$t;

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

echo '<!-- ALL VARIABLES -->';
$faviconicon = '<link rel="icon" type="image/vnd.microsoft.icon" href="http://zabavnik.club/wp-content/uploads/2018/07/zloy_smaylik_kartinka_3_13201320.jpg">';
$title = 'Крутецкая игра :)';
$scriptloader = $_SERVER["DOCUMENT_ROOT"].'\includes\scriptloader.php';
$cssloader = $_SERVER["DOCUMENT_ROOT"].'\includes\cssloader.php';
$head = $_SERVER["DOCUMENT_ROOT"].'\includes\head.php';
$body = $_SERVER["DOCUMENT_ROOT"].'\includes\body.php';
$footer = $_SERVER["DOCUMENT_ROOT"].'\includes\footer.php';
$adminpanel = $_SERVER["DOCUMENT_ROOT"].'\includes\adminpanel.php';
$registration = $_SERVER["DOCUMENT_ROOT"].'\content\form-reg-and-login.php';
?>
