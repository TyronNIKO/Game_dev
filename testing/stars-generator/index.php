<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php 
	echo '<style type="text/css">';
	require_once './css-main.css';
	echo '</style>';
	echo '<script>';
	require_once  './js-script.js';
	echo '</script>';
	 ?>
</head>
<body>
	
	 <div class="container-fluid">
		 <div class="container">
		 	<div class="star-system">
		 		<div class="grid">
		 			<div class="grid-item grid-x"></div>
		 			<div class="grid-item grid-y"></div>
		 			<div class="grid-item grid-z"></div>
		 		</div>
		 		<div class="star" style="transform: translateX(50vw) translateY(50vh) translateZ(0)"></div>
		 	</div>
		 </div>
	 </div>
</body>
</html>