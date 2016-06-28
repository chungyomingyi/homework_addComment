<?php
header("content-type: text/html; charset=utf-8");//要告知系統編碼格式，不然會顯示亂碼
	$contents = file_get_contents('data.txt');	//取得檔案內容並轉成字串
	echo (str_replace("\r\n", "<br />", $contents)); 
	//結果為：
// 	PHP基本語法重點整理、
//  自訂函式寫作注意事項、
//  陣列與相關函式、
//  字串與相關函式、
//  物件導向程式設計、
//  狀態資訊管理、
//  XML/JSON資料處理、
//  PHP資料庫程式設計、
//  檔案系統與資料讀寫、
//  串流與網路程式設計、
//  程式安全與攻防實例、
//  Web Services、
//  PHP與jQuery、
//  jQuery Mobile整合運用
?>