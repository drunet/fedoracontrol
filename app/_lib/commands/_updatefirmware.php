<?php
session_start();

if($_SESSION['username'] == ""){
	die("You are not logged in");
}

$last_line = system('');
$last_line = system('');

header("location: ".$_SERVER['HTTP_REFERER']);
