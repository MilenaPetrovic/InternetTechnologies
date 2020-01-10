<?php

session_start();
if(!isset($_SESSION['username'])){
  $_SESSION['username'] = '';
}

error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "greskeFajl.log");

$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$db = "tapkanje";

$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $db);

if ($mysqli->connect_errno) {
  printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
  exit();
}
$mysqli->set_charset("utf8");
