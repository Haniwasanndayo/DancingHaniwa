<?php
	header("Content-type: application/json");
	
	//DialogFlow���瑗���Ă����f�[�^���擾����
	$request = json_decode(file_get_contents('php://input'));
	//$action �� �Ăяo�����̃A�N�V������(�uplus_action�v�Ȃǂ����o��)
	$action = $request->result->action;
	//$params �� �n���ꂽ�p�����[�^���܂Ƃ߂Ď擾����
	$params = $request->result->parameters;
	
	//�Ăяo�����̃A�N�V�������uhani_dance�v�Ȃ�
	if($action == "hani_dance"){
		$status = 1;
		$message = "��낵�����ǂ��Ă��񂺂悤";
		$fp = fopen("ledstatus.txt", "w");		//ledstatus.txt���J��
		fputs($fp, "{$status}");				//$status�̓��e��������
		fclose($fp);
		
		sleep(5);
		$fp = fopen("ledstatus.txt", "w");		//ledstatus.txt���J��
		fputs($fp, "0");				//$status�̓��e��������
		fclose($fp);
	}else if($action == "hani_arm"){
		$status = 2;
		$message = "�܂������Ă�";
		$fp = fopen("ledstatus.txt", "w");		//ledstatus.txt���J��
		fputs($fp, "{$status}");				//$status�̓��e��������
		fclose($fp);
		
		sleep(3);
		$fp = fopen("ledstatus.txt", "w");		//ledstatus.txt���J��
		fputs($fp, "0");				//$status�̓��e��������
		fclose($fp);
	}
	
	
?>
