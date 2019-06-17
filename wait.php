<?php
		while(true){						//以下を無限ループする
		//$status ← クラウドサーバからledstatus.txtを取得
		$status = file_get_contents("https://hanihanitest.azurewebsites.net/getLEDStatus.php");
		
		if($status == 1){				//「1」(ON)ならば
			exec("python3 bazirisuku.py");
			$get = file_get_contents("https://hanihanitest.azurewebsites.net/ledstatuszero.php");
		}
		
		usleep(1000000);					//1秒待つ
	}
?>
