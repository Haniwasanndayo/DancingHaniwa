<?php
		while(true){						//以下を無限ループする
		//$status ← クラウドサーバからledstatus.txtを取得
		$status = file_get_contents("hoge/getLEDStatus.php");
		
		if($status == 1){				//「1」(ON)ならば
			exec("python3 bazirisuku.py");
			$get = file_get_contents("hoge/ledstatuszero.php");
		}
		
		usleep(10);					//10秒待つ
	}
?>
