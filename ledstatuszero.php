<?php
	$status = 0;
	$fp = fopen("ledstatus.txt", "w");		//ledstatus.txtを開く
	fputs($fp, "{$status}");				//$statusの内容を書込む
	fclose($fp);
?>
