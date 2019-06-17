<?php
	$status = 0;
	$fp = fopen("ledstatus.txt", "w");		//ledstatus.txt‚ðŠJ‚­
	fputs($fp, "{$status}");				//$status‚Ì“à—e‚ð‘ž‚Þ
	fclose($fp);
?>
