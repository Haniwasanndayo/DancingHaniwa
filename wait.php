<?php
		while(true){						//�ȉ��𖳌����[�v����
		//$status �� �N���E�h�T�[�o����ledstatus.txt���擾
		$status = file_get_contents("https://hanihanitest.azurewebsites.net/getLEDStatus.php");
		
		if($status == 1){				//�u1�v(ON)�Ȃ��
			exec("python3 bazirisuku.py");
			$get = file_get_contents("https://hanihanitest.azurewebsites.net/ledstatuszero.php");
		}
		
		usleep(1000000);					//1�b�҂�
	}
?>
