<?php
	ob_start();session_start();
	$_SESSION["login_session"] = false;
	header("Location: index.php");
?>