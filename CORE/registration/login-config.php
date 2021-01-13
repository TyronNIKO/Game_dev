<?php 
//LOGIN
// if(isset($_POST['login-button']){
// 	require 'db-connect.php';
// 	$login = '';
// 	$pass = '';

// 	if(empty(user) || empty(password)) {
// 		echo '<script language="JavaScript">document.location.href ="'.$site_url.'registration-form.php?error=emptyfields&uid='.$reg_login.'&email='.$reg_email.';"</script>';
// 		exit();
// 	}else {
// 		//all ok select DB
// 		$sql = '';
// 		$stmt = mysqli_stmt_init($conn);

// 		if(!mysqli_stmt_prepare($stmt, $sql)){
// 			echo '<script language="JavaScript">document.location.href ="'.$site_url.'registration-form.php?error=emptyfields&uid='.$reg_login.'&email='.$reg_email.';"</script>';
// 			exit();
// 		}else {
// 			echo "qweqw";
// 		};
// 	};
// }else {
// 	//all ok - change user_state
// 	echo '<script language="JavaScript">document.location.href ="'.$site_url.'registration-form.php?error=emptyfields&uid='.$reg_login.'&email='.$reg_email.';"</script>';
// 	exit();
// };