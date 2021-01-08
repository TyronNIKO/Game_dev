<?php
/*Main body*/
if($user_status == '9'){$divide_margin = 'style="margin-top:-50px;"';}
?>

<body id="game_interface" class="load">
	<div class="page-bg-main" <?php echo $divide_margin ?>></div>
		<div class="page-bg-grid" <?php echo $divide_margin ?>></div>
		<?php require_once $slider; ?>
		<div class="page-content">
			<?php
			require_once $login_form;
			require_once $_SERVER["DOCUMENT_ROOT"].'/content/news_section.php';
			require_once $game_select_char_page;
			require_once $_SERVER["DOCUMENT_ROOT"].'/includes/footer.php';
			?>
	</div>
</body>