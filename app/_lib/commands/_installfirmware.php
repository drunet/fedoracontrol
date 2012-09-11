<?php
session_start();

if($_SESSION['username'] == ""){
	die("You are not logged in");
}

echo '<pre>';

$last_line = system('', $retval);

// Printing additional info
echo '
</pre>'; ?>
Firmware Updater Installed!<br/>
<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Return To Previous Page</a>
