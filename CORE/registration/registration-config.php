<?php
//REGISTRATION

	if (isset($_POST['registrationButton']) {
		/*if */

		if ($_POST["reg_password"]) {
			$reg_login = $mysqli->real_escape_string($_POST["reg_login"]);
			$reg_email = $mysqli->real_escape_string($_POST["reg_email"]);
			$reg_password = md5($_POST["reg_password"]);
			$reg_user_ip = $_SERVER['REMOTE_ADDR'];
			$reg_realdate = date("Y-m-d H:i:s");
			$sql = "
			INSERT INTO users (user_login, user_email, user_pass, user_ip, user_regdate)
			VALUES ('$reg_login','$reg_email','$reg_password','$reg_user_ip','$reg_realdate')
			";

			echo $sql.'<br>', $reg_login.'<br>', $reg_email.'<br>', $reg_password.'<br>', $reg_user_ip.'<br>', $reg_realdate.'<br>';

			if($mysqli->query($sql) === TRUE) {
				$_SESSION['message'] = 'Регистрация успешна!';
				print_r($mysqli->query($sql));
			} else {
				$_SESSION['message'] = 'Регистрация не удалась!';
				// header('Location: ../registration-form.php?error=emptyfields&uid='.$reg_login.'&email='.$reg_email);
				echo '<script language="JavaScript">document.location.href ="'.$site_url.'registration-form.php?error=emptyfields&uid='.$reg_login.'&email='.$reg_email.';"</script>';
			}
		}
	}

	$sql = "SELECT user_email FROM users";
	$check_pass = $mysqli->query($sql);

if ($check_pass->num_rows > 0) {
    // output data of each row
    while($row = $check_pass->fetch_assoc()) {
        echo $row["user_email"]. "<br>";
    }
} else {
    echo "0 results";
}
?>