<?php
	$status = 0;
	$fp = fopen("ledstatus.txt", "w");		//ledstatus.txt���J��
	fputs($fp, "{$status}");				//$status�̓��e��������
	fclose($fp);
?>
