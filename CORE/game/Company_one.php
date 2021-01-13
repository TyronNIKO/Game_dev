<!DOCTYPE html>
<html lang="en">
	<?php include_once $head ?>

	<body class="company-one">
		<div class="control-btns">
			<div class="btn random-btn fight">FIGHT</div>
		</div>
		<div class="battle-interface">
			<div class="leftside player"></div>
			<div class="middle">
				<div class="battlelog">
					<span>BATTLELOG:</span>
					<p class="logentry"></p>
				</div>
			</div>
			<div class="rightside enemy"></div>
		</div>
		<div class="battle-status-win"><div class="btn close"><a class="menubtn" href="/game/">Вернуться></a></div></div>
		<div class="battle-status-lose"><div class="btn close"><a class="menubtn" href="/game/">Вернуться</a></div></div>
		<?php include_once $footer ?>
	</body>
</html>