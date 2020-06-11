<?php
	ob_start();session_start();
	$stdout=shell_exec('python3 data/algorithm.py');
	echo $stdout;
?>