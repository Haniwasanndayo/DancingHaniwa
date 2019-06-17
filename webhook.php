<?php
	header("Content-type: application/json");
	
	//DialogFlowから送られてきたデータを取得する
	$request = json_decode(file_get_contents('php://input'));
	//$action ← 呼び出し元のアクション名(「plus_action」などを取り出す)
	$action = $request->result->action;
	//$params ← 渡されたパラメータをまとめて取得する
	$params = $request->result->parameters;
	
	//呼び出し元のアクションが「hani_dance」なら
	if($action == "hani_dance"){
		$status = 1;
		$message = "よろしいおどってしんぜよう";
		$fp = fopen("ledstatus.txt", "w");		//ledstatus.txtを開く
		fputs($fp, "{$status}");				//$statusの内容を書込む
		fclose($fp);
		
		sleep(5);
		$fp = fopen("ledstatus.txt", "w");		//ledstatus.txtを開く
		fputs($fp, "0");				//$statusの内容を書込む
		fclose($fp);
	}else if($action == "hani_arm"){
		$status = 2;
		$message = "まっかせてよ";
		$fp = fopen("ledstatus.txt", "w");		//ledstatus.txtを開く
		fputs($fp, "{$status}");				//$statusの内容を書込む
		fclose($fp);
		
		sleep(3);
		$fp = fopen("ledstatus.txt", "w");		//ledstatus.txtを開く
		fputs($fp, "0");				//$statusの内容を書込む
		fclose($fp);
	}
	
	
?>
