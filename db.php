<?php

$server = "127.0.0.1:3306";
$user = "root";
$pass = "123456";
$db = "game_dev";

mysql_connect($server, $user, $pass) or die ("No connection!");

mysql_select_db($db) or die ("No connection on DB!!!");