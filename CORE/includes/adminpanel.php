<style type="text/css">
	body {padding-top: 50px !important}
</style>
<div class="admin-top-panel">
	<div class="container">
		<ul>
			<li><a id="home" class="menubtn" href="/">Home</a></li>
			<li><a id="game" class="menubtn" href="/game/">Game</a></li>
			<li><a id="game" class="menubtn" href="/content/">Content</a></li>
			<li><a id="logout" class="menubtn">Logout</a></li>
			<li><a id="loginadmin" class="menubtn">Admin</a></li>
			<li><a class="menubtn servicebtn">Service</a></li>
			<div class="user-name-welcome"><?php if($user_nicename !== '') {echo 'Привет: '.$user_nicename;}else{echo 'Назовись';}?></div>
		</ul>
		<div class="server-time"><?php echo $server_time ?></div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('.servicebtn').on('click',function(){
		$('body').toggleClass('service-enabled');
	});
});
</script>