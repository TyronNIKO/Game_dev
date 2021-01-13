<?php
$db_server_ip = "127.0.0.1";
$db_user_name = "root";
$db_user_pass = "localhost-Om2TYL8SQOVg-Dpd";
$db_name = "local_game_dev";

$mysqli = mysqli_connect($db_server_ip, $db_user_name, $db_user_pass, $db_name, 3306);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}

// echo $mysqli->host_info."</br>";
// print_r($mysqli->client_info)."</br>";
