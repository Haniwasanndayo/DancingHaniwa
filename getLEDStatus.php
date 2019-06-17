<?php
	header("Cache-Control: no-cache, must-revalidate");
	readfile("ledstatus.txt");
?>