<?php
session_start();

if(isset($_SESSION['username'])){
	die("You are not logged in");
}
	system('reboot');
?>
	
	<center> Your Fedora Box is now rebooting! </center>
