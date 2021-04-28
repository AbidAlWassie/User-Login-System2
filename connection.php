<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";
$port = "3307";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname, $port)) {
	die("failed to connect!");
}
