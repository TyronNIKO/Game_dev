<style>
	body {padding-top: 50px !important}
</style>
<header class="game-top-panel">
	<div class="container">
		<ul class="game-top-list">
			<li><a id="home" class="menubtn" href="/">Home</a></li>
			<li><a id="game" class="menubtn" href="/game/">Game</a></li>
			<li><a id="logout" class="menubtn">Logout</a></li>
			<li><a id="loginadmin" class="menubtn">Admin</a></li>
			<li><a class="menubtn servicebtn">Service</a></li>
		</ul>
	</div>
</header>
<script type="text/javascript">
	$(document).ready(function(){
		$('.servicebtn').on('click',function(){
			$('body').toggleClass('service-enabled');
		})
});
</script>